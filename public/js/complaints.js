

document.addEventListener('DOMContentLoaded', function() {
    
    const form = document.getElementById('complaintForm');
    const submitBtn = form ? form.querySelector('button[type="submit"]') : null;
    const description = document.getElementById('description');
    const charCounter = document.createElement('small');

    
    if (description) {
        charCounter.className = 'char-counter text-muted';
        charCounter.textContent = '0/1000 حرف';
        description.parentNode.appendChild(charCounter);

        
        description.addEventListener('input', function() {
            updateCharacterCounter(this);
        });

        
        description.addEventListener('input', function() {
            autoResizeTextarea(this);
        });

        
        updateCharacterCounter(description);
    }

    
    if (form && submitBtn) {
        form.addEventListener('submit', function(e) {
            
            if (!validateForm()) {
                e.preventDefault();
                return;
            }

            
            showLoadingState(submitBtn);

            
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>جارٍ الإرسال...';
                submitBtn.disabled = true;
            }, 100);
        });
    }

    
    if (typeof successMessage !== 'undefined' && successMessage) {
        setTimeout(() => {
            resetForm();
        }, 2000);
    }

    
    const fileInput = document.getElementById('attachment');
    if (fileInput) {
        fileInput.addEventListener('change', function() {
            previewFileName(this);
        });
    }

    
    animateFormElements();

    
    function updateCharacterCounter(textarea) {
        const length = textarea.value.length;
        charCounter.textContent = length + '/1000 حرف';

        
        if (length > 1000) {
            charCounter.className = 'char-counter danger';
        } else if (length > 800) {
            charCounter.className = 'char-counter warning';
        } else {
            charCounter.className = 'char-counter text-muted';
        }
    }

    function autoResizeTextarea(textarea) {
        textarea.style.height = 'auto';
        const newHeight = Math.min(textarea.scrollHeight, 300); 
        textarea.style.height = newHeight + 'px';
    }

    function showLoadingState(button) {
        const originalContent = button.innerHTML;
        button.dataset.originalContent = originalContent;
        button.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>جارٍ المعالجة...';
        button.disabled = true;
    }

    function resetLoadingState(button) {
        if (button.dataset.originalContent) {
            button.innerHTML = button.dataset.originalContent;
            button.disabled = false;
        }
    }

    function validateForm() {
        const title = document.getElementById('title');
        const description = document.getElementById('description');
        const terms = document.getElementById('terms');

        let isValid = true;

        
        clearErrors();

        
        if (!title.value.trim()) {
            showError(title, 'يرجى إدخال عنوان للشكوى');
            isValid = false;
        } else if (title.value.trim().length < 5) {
            showError(title, 'العنوان يجب أن يكون على الأقل 5 أحرف');
            isValid = false;
        }

        
        if (!description.value.trim()) {
            showError(description, 'يرجى إدخال تفاصيل الشكوى');
            isValid = false;
        } else if (description.value.trim().length < 20) {
            showError(description, 'التفاصيل يجب أن تكون على الأقل 20 حرفاً');
            isValid = false;
        } else if (description.value.trim().length > 1000) {
            showError(description, 'التفاصيل يجب ألا تتجاوز 1000 حرف');
            isValid = false;
        }

        
        if (terms && !terms.checked) {
            showError(terms, 'يجب الموافقة على الشروط والأحكام');
            isValid = false;
        }

        return isValid;
    }

    function showError(element, message) {
        
        element.classList.add('is-invalid');

        
        let errorDiv = element.parentNode.querySelector('.error-message');
        if (!errorDiv) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'invalid-feedback d-block';
            errorDiv.classList.add('error-message');
            element.parentNode.appendChild(errorDiv);
        }
        errorDiv.textContent = message;

        
        if (element === document.querySelector('.is-invalid')) {
            element.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }

    function clearErrors() {
        
        document.querySelectorAll('.is-invalid').forEach(el => {
            el.classList.remove('is-invalid');
        });

        
        document.querySelectorAll('.error-message').forEach(el => {
            el.remove();
        });
    }

    function previewFileName(input) {
        const fileName = input.files[0] ? input.files[0].name : 'لم يتم اختيار ملف';
        const fileSize = input.files[0] ? ` (${formatFileSize(input.files[0].size)})` : '';

        
        let preview = input.parentNode.querySelector('.file-preview');
        if (!preview) {
            preview = document.createElement('div');
            preview.className = 'file-preview mt-2';
            input.parentNode.appendChild(preview);
        }

        preview.innerHTML = `
            <div class="d-flex align-items-center">
                <i class="fas fa-file me-2 text-primary"></i>
                <div>
                    <small class="d-block">${fileName}${fileSize}</small>
                    ${input.files[0] ?
                        `<small class="text-muted">${input.files[0].type}</small>` :
                        ''
                    }
                </div>
            </div>
        `;

        
        if (input.files[0] && input.files[0].size > 5 * 1024 * 1024) {
            showError(input, 'حجم الملف يتجاوز 5MB');
            input.value = '';
            preview.innerHTML = '';
        }
    }

    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    function resetForm() {
        if (form) {
            form.reset();

            
            if (description) {
                updateCharacterCounter(description);
                description.style.height = 'auto';
            }

            
            const filePreview = document.querySelector('.file-preview');
            if (filePreview) {
                filePreview.remove();
            }

            
            if (submitBtn) {
                resetLoadingState(submitBtn);
            }

            
            clearErrors();
        }
    }

    function animateFormElements() {
        
        const formElements = form ? form.querySelectorAll('.form-floating, .form-check, .btn-primary-custom') : [];
        formElements.forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.animation = `fadeIn 0.5s ease forwards ${index * 0.1}s`;
        });
    }

    
    const inputs = form ? form.querySelectorAll('input[required], textarea[required], select[required]') : [];
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            if (this.value.trim()) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            } else {
                this.classList.remove('is-valid');
            }
        });

        input.addEventListener('input', function() {
            if (this.value.trim()) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');

                
                const errorDiv = this.parentNode.querySelector('.error-message');
                if (errorDiv) {
                    errorDiv.remove();
                }
            }
        });
    });

    
    const formControls = form ? form.querySelectorAll('.form-control, .form-select') : [];
    formControls.forEach(control => {
        control.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });

        control.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });
});
