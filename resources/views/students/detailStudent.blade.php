<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @font-face {
    font-family: 'AdiHaus';
    src: url('https://assets.codepen.io/6060109/adihaus_regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: "AdiHaus";
    src: url("https://assets.codepen.io/6060109/adihaus_bold.ttf") format("truetype");
    font-weight: bold;
    font-style: normal;
}

*, *::before, *::after {
    box-sizing: border-box;
    border-style: none;
    list-style: none;
    margin: 0;
    padding: 0;
    text-decoration: none;
}
  
:root {
    --theme-color-black: #333333; /* rgba(51, 51, 51, 1) */
    --theme-color-brown: #423A3A; 
    --theme-color-red: #CD3A24;
    --theme-color-white: #FEFFFF; /* rgba(254, 255, 255, 1) */
}
  
/* ---------- MAIN BODY DECLERATIONS ---------- */

html, body {
    background-color: var(--theme-color-white);
    font-family: "AdiHaus";
    font-size: 14px;
    height: 100%;
    width: 100%;
}

input {
    font-family: 'AdiHaus';
}

.mobile-container {
    margin: 0 auto;
    max-width: 500px;
    min-width: 300px;
}

.hero-image-desktop {
    display: none;
}

/* ---------- HERO BANNER DECLERATIONS ---------- */
.hero-banner {
    align-items: center;
    display: flex;
    flex-direction: column;
}

.hero-banner .logo-wrapper {
    height: auto;
    margin: 0 auto;
    padding: 1rem 0;
    width: auto;
}
    
    .logo-wrapper img {
        display: block;
        height: 2.5rem;
        margin: 0 auto;
        width: auto;
    }

.hero-banner .hero-image {
    background-image: url(https://assets.codepen.io/6060109/athlete-girl.png);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 376px;
    width: 100%;
}

/* ---------- TEXT INFO DECLERATIONS ---------- */
.text-info {
    align-items: center;
    display: flex;
    flex-direction: column;
    text-align: center;
    width: 100%;
}

    .text-info > * {
        padding: 0 2.5rem 1rem;
    }

    /* intended for the first h2 within .text-info */
    .text-info h2:nth-child(1) {
        color: var(--theme-color-red);
        font-weight: normal;
        padding-top: 1.8rem;
        padding-bottom: 1rem;
    }

    .text-info h2 {
        font-size: 3.5rem;
        font-weight: bold;
        color: var(--theme-color-brown);
        letter-spacing: 5px;
        text-transform: uppercase;
    }

    .text-info p {
        color: var(--theme-color-black);
        line-height: 24px;
    }

    .text-info .email-signup {
        margin: 1rem 0 6rem;
        position: relative;
        width: 100%;
    }
    
        .email-signup .email-input {
            border: 1px solid rgba(51, 51, 51, .7);
            border-radius: 3px;
            padding: 1rem 1.5rem;
            opacity: .5;
            width: 100%;
        }

        .email-signup .email-input:focus {
            background-color: var(--theme-color-white);
            outline: 2px solid var(--theme-color-black);
            opacity: 1;
        }

        .email-signup .email-submit {
            background-color: var(--theme-color-black);
            border-bottom: 1px solid var(--theme-color-black);
            border-radius: 2px;
            color: var(--theme-color-white);
            cursor: pointer;
            font-weight: bold;
            opacity: 1;
            padding: 1rem 1.5rem;
            position: absolute;
            right: 0;
            margin-right: 2.5rem;
            z-index: 10;
        }

@media only screen and (min-width: 768px) {
    body {
        background-image: url(https://assets.codepen.io/6060109/destop-bg.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: row;
        height: 100%;
    }

    main {
        display: flex;
        flex-direction: column;
        height: inherit;
        max-width: 100%;
        margin: 0 auto;
        padding-left: 3.5rem;
    }

    .mobile-container {
        width: 45vw;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .hero-banner .logo-wrapper {
        margin-left: 3.5rem;
        width: 100%;
        display: flex;
        align-items: start;
        flex-direction: column;
    }
        .logo-wrapper img {
            margin: 0 0 0;
            padding-left: 2.5rem;
        }

    .hero-image {
        display: none;
    }

    .text-info {
        text-align: left;
        align-items: start;
    }
    
        .text-info h2 {
            font-size: 4.5rem;
        }

        .text-info p {
            font-size: 16px;
        }

        .text-info input {
            font-size: 16px;
        }
  
        .text-info .email-signup {
            margin: 1rem 0 7rem;
        }

    .hero-image-desktop {
        display: block;
        height: 100%;
        width: 55vw;
    }

    .hero-image-desktop img {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 30% 100%);
        height: 100%;
        object-fit: cover;
        width: 100%;
    }
  
    .email-signup .email-submit {
        border-bottom: 2px solid var(--theme-color-black);
    }
}
    </style>
    <title>Document</title>
</head>

<body>


    <div class="mobile-container">
        <main>
            <article class="text-info">
                <h2>We're</h2>
                <h2>Coming<br>Soon</h2>
                <p>Hello friends! I am really stuck at this point, but i will try another time! stay tune on my github: illuminateee</p>
                <section class="email-signup">
                    <form>
                        <input class="email-input" type="email" required placeholder="Email Address" name="email-address">
                        <input class="email-submit" value="Go" type="submit" text="Go" for="email-address"></input>
                    </form>
                </section>
            </article>
        </main>
    </div>
    <div class="hero-image-desktop">
        <img src="https://assets.codepen.io/6060109/athlete-big.png" alt="Femail athlete squinting towards the camera.">
    </div>
</body>

</html>