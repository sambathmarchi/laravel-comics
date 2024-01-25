<section class="cards">
    <div class="bigbtn">
        <h2>CURRENT SERIES</h2>
    </div>
    <div class="cardscontainer">
        @foreach ($comics as $comic)
        <div class="card">
            <img class="comicimg" src="{{ $comic["thumb"] }}" alt="">
            <h3>{{strtoupper($comic["title"])}}</h3>
        </div>
        @endforeach

    </div>
    <div class="smallbtn">
        <h2>LOAD MORE</h2>
    </div>
</section>

<style>
    .cardscontainer {

        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        padding: 0.5rem 10%;
    }

    .cards {
        background-color: #222;
        position: relative;
        padding: 2rem 0;

    }

    .bigbtn {
        width: 12rem;
        height: 2.5rem;
        font-size: 0.8rem;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(0, 110, 255);
        position: absolute;
        top: -1rem;
        left: 10%
    }

    .smallbtn {
        width: 10rem;
        height: 2.5rem;
        font-size: 0.6rem;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(0, 110, 255);
        margin: 0.5rem auto;
    }

    .card {
        width: 13%;
        color: white;
        margin: 1rem;

    }

    .comicimg {
        width: 100%;
        aspect-ratio: 1 / 1;
        object-fit: cover;
        border-radius: 0.1rem;
    }

    h3 {
        font-size: 0.8rem;
    }
</style>