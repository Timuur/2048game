<script>
    //<!--import logo from "./assets/svelte.png";
    //import Counter from "./lib/Counter.svelte";-->
    import GridContainer from "../lib/Grid-container.svelte";
    import Chat from "../lib/Chat.svelte";
</script>

<main>
    <div class="header">
        <h1>2048</h1>
        <!--<a href="javascript:newGame()" id="newGameButton">Новая игра</a>
    -->
        <p>score:<span id="score">0</span></p>
    </div>
    <div class="activeZone">
        <GridContainer />
        <Chat/>
    </div>

</main>

<style>
    :root {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    }

    main {
        text-align: center;
        padding: 1em;
        margin: 0 auto;
    }
    .activeZone{
        display: -webkit-box;
    }

    .header {
        margin: 0 auto;
        display: block;
        text-align: center;
        width: 500px;
        /*border: 1px solid black;*/
    }

    .header h1 {
        font-family: Arial;
        font-weight: bold;
        font-size: 50px;
        margin: 0 auto;
    }

    .header #newGameButton {
        text-decoration: none;
        display: block;
        font-family: Arial;
        margin: 0 auto;
        padding: 10px 10px;
        color: white;
        border-radius: 10px;
        background-color: #8f7a66;
        width: 100px;
    }

    .header #newGameButton:hover {
        background-color: #9f9e35;
    }

    .header p {
        font-family: Arial;
        font-size: 25px;
        margin: 0 auto;
    }

    @media (min-width: 480px) {
        h1 {
            max-width: none;
        }

        p {
            max-width: none;
        }
    }
</style>
