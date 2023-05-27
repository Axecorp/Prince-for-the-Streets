$(document).ready(function(){
    gsap.registerPlugin(ScrollTrigger);
    // let initTop = parseInt($(".models").css("top").replace("px", ""));
    // let initLeft = parseInt($(".models").css("left").replace("px", ""));
    // let initLeft = parseInt($(".models").css("left").replace("px", ""));
    // $(window).resize(function(){
    //     if($(".hero").hasClass("active")){
    //         if ($(window).innerWidth() > 991) {
    //             $(".models").css({
    //                 "left" : `${-85}px`,
    //             });
    //         }
    //         if ($(window).innerWidth() <= 991) {
    //             $(".models").css({
    //                 "left" : `${0}px`,
    //             });
    //         }
    //     }
    // })
    
    // $(".scroll-down .icon").click(function(){
    //     $("#main_menu .menu-item").eq(parseInt($(this).parent().attr("no"))).click()
    // })
    // let scroll = $(window).innerHeight();
    // $(window).scroll(function(){
    //     // let top = initTop + $(window).height();
    //     // if($(".hero").hasClass("active")){

    //     //     //     $("#gif1").css("scale", "100%");
    //     //     // }else if(($(window).innerWidth() <= 1400) && ($(window).innerWidth() > 991)){
    //     //     //     $("#gif1").css("scale", "90%");
    //     //     // }else if($(window).innerWidth() <= 991){
    //     //     //     $("#gif1").css("scale", "100%");
    //     //     // }
    //     //     // $("#gif2").removeClass("show");
    //     //     // $("#gif3").removeClass("show");
    //     //     // $("#gif4").removeClass("show");
    //     //     // $("#gif1").delay(400).addClass("show");
    //     //     // $(".models").css({
    //     //     //     "top" : `${initTop}px`,
    //     //     //     "left" : `${initLeft}px`,
    //     //     //     "transform" : "translateX(0%)"
    //     //     // });
    //     //     // if ($(window).innerWidth() <= 991) {
    //     //     //     $(".models").css({
    //     //     //         "top" : `${initTop}px`,
    //     //     //         "left" : `${0}px`,
    //     //     //         "transform" : "translateX(0%)"
    //     //     //     });
    //     //     // }
    //     //     // $(".media-item").fadeOut(500);
    //     // }
    //     // if($(".returns").hasClass("active")){

    //     //     // $(".models").css({
    //     //     //     "top" : `${($(window).height()*1) - 100}px`,
    //     //     //     "left" : "50%",
    //     //     //     "transform" : "translateX(-50%)"
    //     //     // });
    //     //     // $("#gif1").css("scale", "60%");
    //     //     // $("#gif1").removeClass("show");
    //     //     // $("#gif3").removeClass("show");
    //     //     // $("#gif4").removeClass("show");
    //     //     // $("#gif2").delay(400).addClass("show");
    //     // }
    //     // if($(".conversion").hasClass("active")){

    //     // }
    //     // if($(".brand-value").hasClass("active")){

    //     //     //     "top" : `${($(window).height()*3) - 100}px`,
    //     //     //     "left" : "600px",
    //     //     // });
    //     //     // $("#gif1").removeClass("show");
    //     //     // $("#gif2").removeClass("show");
    //     //     // $("#gif4").removeClass("show");
    //     //     // $("#gif3").delay(400).addClass("show");
    //     // }
    //     // if($(".shopify").hasClass("active")){
   
    //     //     //     "top" : `${($(window).height()*4) + $(window).height()/4 - 70}px`,
    //     //     //     "left" : "480px",
    //     //     // });
    //     //     // $("#gif1").removeClass("show");
    //     //     // $("#gif2").removeClass("show");
    //     //     // $("#gif3").removeClass("show");
    //     //     // if($(".big-link").css("display") != "none")
    //     //     // $("#gif4").delay(400).addClass("show");
    //     // }
        
        
    //     //logo

    //     // console.log($(window).scrollTop());
    //     // if($(window).scrollTop() >= 140){
    //     //     // console.log(($(".hero .inner .content .heading")));
    //     //     if(!($(".hero .inner .content .heading").hasClass("active"))){
    //     //         $(".hero .inner .content .heading").addClass("active");
    //     //         $(".hero .inner .content .tagline").addClass("active");
    //     //     }else{
    //     //         $(".hero .inner .content .heading").removeClass("active");
    //     //         $(".hero .inner .content .tagline").removeClass("active");
    //     //     }
    //     // }

    //     //models

    //     if(($(window).scrollTop() > scroll - 400)&&($(window).scrollTop() <= scroll*2 - 400)){
    //         if($(".graphics .model").eq(0).css("opacity") == "0"){
    //             $(".graphics .model").css("opacity", "0");
    //             $(".graphics .model").eq(0).css("opacity", "1");
    //         }
    //     }
    //     else if(($(window).scrollTop() > scroll*2 - 400)&&($(window).scrollTop() <= scroll*3 - 400)){
    //         if($(".graphics .model").eq(1).css("opacity") == "0"){
    //             $(".graphics .model").css("opacity", "0");
    //             $(".graphics .model").eq(1).css("opacity", "1");
    //         }
    //     }else if(($(window).scrollTop() > scroll*3 - 400)&&($(window).scrollTop() <= scroll*4 - 400)){
    //         if($(".graphics .model").eq(2).css("opacity") == "0"){
    //             $(".graphics .model").css("opacity", "0");
    //             $(".graphics .model").eq(2).css("opacity", "1");
    //         }
    //     }
    //     else if(($(window).scrollTop() > scroll*4 - 400)||($(window).scrollTop() <= scroll - 400)){
    //         $(".graphics .model").css("opacity", "0");
    //     }
    // });

    //smallprints 

    // $(".smallprint").click(function(){
    //     $("#gif2").removeClass("show");
    //     if(!($(".media-item").eq($(this).index()).css("display") != "none")){
    //         $(".media-item").fadeOut(500);
    //         $(".media-item").eq($(this).index()).fadeIn(500);
    //     }
    //     if($(this).hasClass("show-model")){
    //         $("#gif2").addClass("show");
    //     }
    // });
    // $(".smallprint-shopify").click(function(){
    //     $("#gif4").removeClass("show");
    //     if(!($(".media-item-shopify").eq($(this).index()).css("display") != "none")){
    //         $(".media-item-shopify").fadeOut(500);
    //         $(".media-item-shopify").eq($(this).index()).fadeIn(500);
    //     }
    //     if($(this).hasClass("big-link-trigger")){
    //         $("#gif4").addClass("show");
    //     }
    // });


    
    //signature
    // let abcd = 'WHOMADETHIS';
    // let arr = [];  
    // $(document).on("keypress", function(e){
    //     arr.push(e.key);
    //     if (arr.join().replaceAll(",", "") == abcd){
    //         console.log("anashussain2711");
    //         setTimeout(() => {
    //             console.log(":)");
    //         }, 1500);
    //     }
    // })

    //description blurb

    // $(".heart").click(function(){
    //     $(".heart .normal").toggle();
    //     $(".heart .clicked").toggle();
    // })

    // //CTA
    // $(".color").click(function(){
    //     $(".color").removeClass("active");
    //     $(this).addClass("active");
    //     $(".color-text").hide()
    //     $(".color-text").eq($(this).index()).show()
    // })

    // $(".cta .box .cross").click(function(){
    //     $(".cta .box .box-wrap").animate({opacity: "0"}, 200).hide(250)
    //     $(".cta .button").addClass("engulf");
    //     setTimeout(() => {
    //         $(".cta .button").addClass("settle");
    //         if($(".cta .box .box-wrap").css("display") == "none"){
    //             $(".cta .peeker").css("max-width", "300px");
    //             $(".cta .peeker .peeker-wrap").fadeIn(100);
    //             $(".cta .peeker").addClass("show");
    //         }
    //     }, 500);
    //     $(".cta .peeker").click(function(){
    //         $(".cta .button").css("pointer-events", "none");
    //         setTimeout(() => {
    //             $(".cta .button").css("pointer-events", "all");
    //         }, 200);
    //         $(".cta .button").css("pointer-events", "none");
    //         $(".cta .peeker").css("max-width", "290px");
    //         $(".cta .peeker .peeker-wrap").fadeOut(100);
    //         $(".cta .peeker").removeClass("show");
    //         setTimeout(() => {
    //             $(".cta .box .box-wrap").animate({opacity: "1"}, 200).show(250);
    //             setTimeout(() => {
    //                 $(".cta .button").removeClass("engulf");
    //                 $(".cta .button").removeClass("settle");
    //             }, 500);
    //         }, 200);
    //     })
    // })

    //scroll-bottom

    // $(".scroll-down .icon").click(function(){
    //     $.fn.fullpage.moveSectionDown();
    //     // let selector = "section" + $(this).attr("no");

    // })

    //background-change
    // let c = 0;
    // let durations = [1666.6, 1333.3, 1416.6, 1583.3];
    // setInterval(() => {
    //     $(".bg").hide();
    //     $(".bg").eq(c).show();
    //     c += 1;
    //     c = c % $(".bg").length;
    // }, durations[c]);

    

    let tl = gsap.timeline({
        // yes, we can add it to an entire timeline!
        scrollTrigger: {
          trigger: "#section2",
          pin: true,   // pin the trigger element while active
          start: "top top", // when the top of the trigger hits the top of the viewport
          end: "bottom", // end after scrolling 500px beyond the start
          scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
          markers:true,
            //   snap: {
            //     snapTo: "labels", // snap to the closest label in the timeline
            //     duration: {min: 0.2, max: 3}, // the snap animation should be at least 0.2 seconds, but no more than 3 seconds (determined by velocity)
            //     delay: 0.2, // wait 0.2 seconds from the last scroll event before doing the snapping
            //     ease: "power1.inOut" // the ease of the snap animation ("power3" by default)
            //   }
        }
      });
      

    // add animations and labels to the timeline
    // tl.addLabel("start")
    //   .from(".box p", {scale: 0.3, rotation:45, autoAlpha: 0})
    //   .addLabel("color")
    //   .from(".box", {backgroundColor: "#28a92b"})
    //   .addLabel("spin")
    //   .to(".box", {rotation: 360})
    //   .addLabel("end");
})