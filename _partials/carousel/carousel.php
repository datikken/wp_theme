

<!--CAROUSEL-->
<div class="owl-wrapper">
    <span class="owl-controls-heading">Новинки</span>

    <div class="owl-carousel">

        <div class="carousel_card">
            <div class="carousel_card-wrapper">
                <div class="carousel_card-wrapper_item">
                    <span class="carousel_card-wrapper_item-name">Картридж</span>
                </div>
                <div class="carousel_card-wrapper_item">
                    <span class="carousel_card-wrapper_item-heading">Название картриджа</span>
                </div>

                <div class="carousel_card-wrapper_item">
                    <div class="carousel_card-wrapper_item-image"></div>
                </div>

                <div class="carousel_card-wrapper_item">
                    <div class="carousel_card-wrapper_item-buttons">
                        <div class="carousel_card-wrapper_item-buttons_price">
                            <span>360</span>
                        </div>
                        <div class="carousel_card-wrapper_item-buttons_cart">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="carousel_card">
            <div class="carousel_card-wrapper">
                <div class="carousel_card-wrapper_item">
                    <span class="carousel_card-wrapper_item-name">Картридж</span>
                </div>
                <div class="carousel_card-wrapper_item">
                    <span class="carousel_card-wrapper_item-heading">Название картриджа</span>
                </div>

                <div class="carousel_card-wrapper_item">
                    <div class="carousel_card-wrapper_item-image"></div>
                </div>

                <div class="carousel_card-wrapper_item">
                    <div class="carousel_card-wrapper_item-buttons">
                        <div class="carousel_card-wrapper_item-buttons_price">
                            <span>360</span>
                        </div>
                        <div class="carousel_card-wrapper_item-buttons_cart">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="carousel_card">
            <div class="carousel_card-wrapper">
                <div class="carousel_card-wrapper_item">
                    <span class="carousel_card-wrapper_item-name">Картридж</span>
                </div>
                <div class="carousel_card-wrapper_item">
                    <span class="carousel_card-wrapper_item-heading">Название картриджа</span>
                </div>

                <div class="carousel_card-wrapper_item">
                    <div class="carousel_card-wrapper_item-image"></div>
                </div>

                <div class="carousel_card-wrapper_item">
                    <div class="carousel_card-wrapper_item-buttons">
                        <div class="carousel_card-wrapper_item-buttons_price">
                            <span>360</span>
                        </div>
                        <div class="carousel_card-wrapper_item-buttons_cart">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    const owl = $('.owl-wrapper');

    let count;

    if(window.screen.width < 450) {
        count = 1;
    } else {
        count = 5;
    }

    if(owl) {
        document.addEventListener("DOMContentLoaded", function() {
            $('.owl-carousel').owlCarousel({
                items: count,
                nav: true,
                autoplay: true,
                loop: true,
                stagePadding: 10
            });
        });
    }

</script>
<!--CAROUSEL-->