            let left = document.querySelector('.left')
            let sign_up_form = document.querySelector('.sign-up-form')
            let sign_in_form = document.querySelector('.sign-in-form')
            let right = document.querySelector('.right')
            let sign_up = document.querySelector('.sign-up')
            let greeting = document.querySelector('.greeting')
            let greeting_text = document.querySelector('.greeting-text')
            let login = document.querySelector('.login')
            sign_up_form.style.visibility = 'hidden'
            sign_up_form.style.opacity = '0'
            // sign_up_form.style.zIndex = '-1'
            sign_up_form.style.left = '0'
            sign_up.addEventListener('click', () => {

                if (sign_up.innerText == 'Sign Up') {


                    right.style.transform = 'translateX(-100%)'
                    left.style.transform = 'translateX(100%)'
                    right.classList.remove('rounded-start-0')
                    right.classList.add('rounded-end-0')
                    sign_up_form.style.visibility = 'visible'
                    sign_up_form.style.opacity = '1'
                    sign_up_form.style.transform = 'translateX(100%)'
                    greeting.innerText = 'Welcome Back!'
                    greeting_text.innerText = "Welcome back,let's login to start the shopping journey"
                    sign_up.innerHTML = 'Sign In'
                } else {
                    right.style.transform = 'translateX(0%)'
                    left.style.transform = 'translateX(-0%)'
                    right.classList.add('rounded-start-0')
                    right.classList.remove('rounded-end-0')
                    sign_up_form.style.visibility = 'hidden'
                    sign_up_form.style.opacity = '0'
                    sign_up_form.style.transform = 'translateX(0%)'
                    greeting.innerText = 'Salam Customer'
                    greeting_text.innerText = "  Enter your credentials to start your dream shopping journey!"
                    sign_up.innerHTML = 'Sign Up'
                }


            })
            login.addEventListener('click', () => {

                right.style.transform = 'translateX(0%)'
                left.style.transform = 'translateX(-0%)'
                right.classList.add('rounded-start-0')
                right.classList.remove('rounded-end-0')
                sign_up_form.style.visibility = 'hidden'
                sign_up_form.style.opacity = '0'
                sign_up_form.style.transform = 'translateX(0%)'
                greeting.innerText = 'Salam Customer'
                greeting_text.innerText = "  Enter your credentials to start your dream shopping journey!"
                sign_up.innerHTML = 'Sign Up'




            })