<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        
        <title> Password Generated </title>
    </head>
    <body>
        
        <!-- content -->
        <div class="form">
            <div class="field">
                <label class="field__label"> Password Generated </label>
                <input class="field__input" type="text" disabled value="No Password generated" />
            </div>

            <button>Generate Random Password</button>
        </div>

        <!-- stylesheets -->
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap");

            html,
            body {
                height: 100%;
            }

            body {
                margin: 0;

                display: flex;
                align-items: center;
                justify-content: center;

                background: #000000;
            }

            .form {
                display: grid;
                grid-template-columns: 100%;
                gap: 1rem;
            }

            button {
                font-size: 1rem;
                font-weight: 600;
                user-select: none;

                display: inline-flex;
                align-items: center;
                justify-content: center;

                appearance: none;
                border: none;
                outline: none;

                background: #000000;
                color: #d3d3d3;

                border: 2px solid #000000;
                border-radius: 0.375rem;

                height: 2.5rem;
                min-width: 6rem;
                padding: 0 1rem;

                cursor: pointer;
                transition: background 0.2s, box-shadow 0.2s;
            }

            button:hover {
                background: #d3d3d3;
                color: #000000
            }

            button:active {
                background: #315885;
            }

            button:focus {
                box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.6);
            }

            .field {
                display: flex;
                flex-direction: column;
                min-width: 20rem;
            }

            .field__label {
                font-size: 37px;
    margin-bottom: 0.5rem;
    user-select: none;
    color: #d3d3d3;
    font-weight: bolder;
            }

            .field__input {
                text-align: center;
    font-size: 1.2rem;
    color: #28df99;
    font-weight: bolder;
    background: #000000;
    letter-spacing: 1px;
    border: 2px solid #30363d;
    border-radius: 0.375rem;
    outline: none;
    padding: 0 1rem;
    height: 2.5rem;
    transition: border-color 0.2s, box-shadow 0.2s;
            }

            .field__input:focus {
                border-color: #58a6ff;
                box-shadow: 0 0 0 1px #58a6ff;
            }

            .field:not(:focus-within):hover .field__input {
                border-color: #FB03EF;
            }
        </style>


        <!-- script -->
        <script>
            function generatePassword(length = 16) {
                const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@#!?";
                let password = "";

                for (let index = 0; index < length; index++) {
                    const randomValueFromCharset = charset[Math.floor(Math.random() * charset.length)];
                    password += randomValueFromCharset;
                }

                return password;
            }

            const button = document.querySelector("button");
            const input = document.querySelector("input");

            button.addEventListener("click", () => {
                input.value = generatePassword();
            });
        </script>
        
        
        
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>