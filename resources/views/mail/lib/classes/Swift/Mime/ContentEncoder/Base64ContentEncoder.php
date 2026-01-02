<?php




class Swift_Mime_ContentEncoder_Base64ContentEncoder extends Swift_Encoder_Base64Encoder implements Swift_Mime_ContentEncoder
{
    
    public function encodeByteStream(Swift_OutputByteStream $os, Swift_InputByteStream $is, $firstLineOffset = 0, $maxLineLength = 0)
    {
        if (0 >= $maxLineLength || 76 < $maxLineLength) {
            $maxLineLength = 76;
        }

        $remainder = 0;

        while (false !== $bytes = $os->read(8190)) {
            $encoded = base64_encode($bytes);
            $encodedTransformed = '';
            $thisMaxLineLength = $maxLineLength - $remainder - $firstLineOffset;

            while ($thisMaxLineLength < strlen($encoded)) {
                $encodedTransformed .= substr($encoded, 0, $thisMaxLineLength) . "\r\n";
                $firstLineOffset = 0;
                $encoded = substr($encoded, $thisMaxLineLength);
                $thisMaxLineLength = $maxLineLength;
                $remainder = 0;
            }

            if (0 < $remainingLength = strlen($encoded)) {
                $remainder += $remainingLength;
                $encodedTransformed .= $encoded;
                $encoded = null;
            }

            $is->write($encodedTransformed);
        }
    }

    
    public function getName()
    {
        return 'base64';
    }
}
