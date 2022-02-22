$(document).ready(function(){

    function slider() {

        $('#projects .owl-carousel').owlCarousel({
            margin: 30,
            loop:true,
            items: 3,
            mergeFit: true,
            responsive: {
                0: {
                    items:1,
                    margin: 10,
                },
                767: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
      
        $('#industries .owl-carousel').owlCarousel({
            margin: -350,
            loop:true,
            center: true,
            items: 2,
            responsive: {
                0: {
                    items: 1,
                    margin: 10, 
                },
                767: {
                    items: 2
                },
            }
        })
    
        $('#medias .owl-carousel').owlCarousel({
            margin: 30,
            loop:true,
            mergeFit: true,
            items: 3,
            video:true,
            responsive: {
                0: {
                    items:1,
                    margin: 10,
                },
                767: {
                    items: 2
                },
                1000: {
                    items: 2
                }
            }
        })
    
        $('#community_participation .owl-carousel').owlCarousel({
            margin: 0,
            loop:true,
            mergeFit: true,
            items: 3,
            responsive: {
                0: {
                    items:1,
                    margin: 10,
                },
                767: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1600: {
                    items: 4
                }
            }
        })
    
        let projects_carousel = $('#projects .owl-carousel');
        projects_carousel.owlCarousel();
        
        $('#projects .customNextBtn').click(function() {
    
            projects_carousel.trigger('next.owl.carousel');
        })
        
        $(' #projects .customPrevBtn').click(function() {
    
            projects_carousel.trigger('prev.owl.carousel', [300]);
        })
    
        let industries_carousel = $('#industries .owl-carousel');
        industries_carousel.owlCarousel();
        
        $('#industries .customNextBtn').click(function() {
            industries_carousel.trigger('next.owl.carousel');
        })
        
        $(' #industries .customPrevBtn').click(function() {
            
            industries_carousel.trigger('prev.owl.carousel', [300]);
        })
    
        let medias_carousel = $('#medias .owl-carousel');
        medias_carousel.owlCarousel();
        
        $('#medias .customNextBtn').click(function() {
            medias_carousel.trigger('next.owl.carousel');
        })
        
        $(' #medias .customPrevBtn').click(function() {
            
            medias_carousel.trigger('prev.owl.carousel', [300]);
        })
    
        let community_participation_carousel = $('#community_participation .owl-carousel');
        community_participation_carousel.owlCarousel();
        
        $('#community_participation .customNextBtn').click(function() {
            community_participation_carousel.trigger('next.owl.carousel');
        })
        
        $(' #community_participation .customPrevBtn').click(function() {
            
            community_participation_carousel.trigger('prev.owl.carousel', [300]);
        })
    }

    function getting_involved() {

        var url_string = window.location;
        var url = new URL(url_string);

        var value = url.searchParams.get("program");

        if (!!value) {

            setTimeout(() => {
                switch (value) {
                
                    case "ambassador":
                        $("#ambassador_program").addClass("active")
                        break
                    
                    case "diplomats":
                        $("#diplomats_program").addClass("active")
                        break
                        
                    case "senators":
                        $("#senators_program").addClass("active")
                        break
    
                    case "market":
                        $("#market_consuls_program").addClass("active")
                        break
    
                    case "network":
                        $("#network_concordat_program").addClass("active")
                        break
                }
            }, 100);
        }
    }

    $(".program").on("click", function () {

        $(".program").removeClass("active")
        $("#" + $(this).attr('id')).addClass("active")
    })

    slider()
    getting_involved()

    $("#year").html(new Date().getFullYear())
});