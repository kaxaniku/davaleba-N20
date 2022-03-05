<section id="intro">
        <div class="container1">
            <div class="row">

                

                <div class="intro-content">
                    <div class="content">
                        <span>Trending Episode</span>
                        <h1>Dreams of an unique ideas scattered through a</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    </div>

                    <div class="img">
                        <img src="assets/img/main-img.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

<main>
    <section class="sec-Welcome">
        <div class="container">
        <h1><?= $data["about"]["H_title"]?></h1>
        <p><?= $data["about"]["H_text"]?></p>
        <div class="categories">
            <?php foreach ($data["categories"] as $value) { ?>
                <div class="item">
                    <a href=""><?=$value["title"]?></a>
                </div>
            <?php }?>
        </div>
        </div>    
    </section>
    <section class="sec-boxes">
    <div class="container">
        <div class="box">
            <span>insert pic here.</span>
            <div class="text-box">
                <h2>News 1</h2>
                <p>consectetur adipiscing elit. Vestibulum pellentesque malesuada augue non convallis.</p>
                <button class="btn">View</button>
            </div>
        </div>
        <div class="box">
            <span>insert pic here.</span>
            <div class="text-box">
                <h2>News 1</h2>
                <p>consectetur adipiscing elit. Vestibulum pellentesque malesuada augue non convallis.</p>
                <button class="btn">View</button>
            </div>
        </div>
        <div class="box">
            <span>insert pic here.</span>
            <div class="text-box">
                <h2>News 1</h2>
                <p>consectetur adipiscing elit. Vestibulum pellentesque malesuada augue non convallis.</p>
                <button class="btn">View</button>
            </div>
        </div>
    </div>
    </section>
</main>