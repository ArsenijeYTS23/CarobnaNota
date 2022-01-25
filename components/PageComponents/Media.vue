<template>
<div>
  <div class="site-blocks-cover overlay" style="background-image: url('car.png'); min-height:220px; height:220px;" data-aos="fade" data-stellar-background-ratio="0.5" >
  <!-- <div  style="background-image: url('car1.png'); height:220px; background-repeat: no-repeat; background-position: center;" data-aos="fade" data-stellar-background-ratio="0.5" > -->
    <!-- <div class="site-blocks-cover overlay" style="background-image: url('car.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade"> -->
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
       <div id="playerContainer" style="display:none"></div>

          </div>
        </div>

      </div>

      <h1 style=" position:absolute; bottom:0px; left:50%; transform: translate(-50%);
      background:rgba(255, 255, 255, 0.61); color:#0088b0; border-radius:25px; font-size:200%;">Media</h1>
    </div>
    <!-- <br> -->

    <div class="site-section bg-light block-13">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Slike</h2>
            <p>Slike sa nastupa i putovanja...
              Više slika u odeljku "Koncerti", kao i na našoj Facebook stranici</p>
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-right">
        <div class="nonloop-block-13 owl-carousel">
          <div   v-for="img in media[0]" v-bind:key='img.id'>
      <img v-bind:src="img.slike" alt="Image" class="img-fluid">
    </div>


    </div>
    </div>
  </div>
<div class="site-section bg-light block-13">
        <!-- <div class="nonloop-block-13 owl-carousel"> -->
        <div class="container" data-aos="fade-right">
          <div class="row">
            <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
              <h2 class="mb-5">Video snimci</h2>
              <p>Više snimaka u odeljku "Koncerti" i na našoj Facebook stranici</p>
            </div>
          </div>
        </div>


<div class="container" data-aos="fade-up">

             <div class="row">


                  <!-- <iframe  v-for="video in media[1]"  v-bind:key='video.id' src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fcarobnanota.nis%2Fvideos%2F2151740918454198%2F&show_text=0&width=560"
                   width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"
                    allowFullScreen="true"></iframe> -->


<iframe  v-for="video in media[1]"  v-bind:key='video.id' v-bind:src="video.video"
 v-bind:width="video.width" v-bind:height="mobi(video.height)"
  style="border:none;overflow:hidden; margin:5px;" scrolling="no" frameborder="0"
   allowTransparency="true" allowFullScreen="true"  muted></iframe>




              </div>

      </div>
    </div>

</div>
</template>
<script>
    export default {
      data () {
          return {
              media:{},
              home_page: {},
          //    display:'block'
          }
      },
      metaInfo() {
        return{
     title: 'Slike i snimci -Carobna nota',
  //   titleTemplate: '%s - Home',

     meta: [
      { name: 'twitter:title', content: 'Slike i snimci -Carobna nota', vmid:'twitter:title'   },
      { name: 'twitter:description', content: 'Muzicka radionica, Hor, Skola', vmid:'twitter:description'   },
      { name: 'twitter:image', content: 'http://www.carobnanota.com/car.jpg', vmid:'twitter:image'   },

      {property:"og:type", content:"website", vmid:'og:type'},
      {property:"og:url", content:"http://www.carobnanota.com/#/media", vmid:'og:url'},
      {property:"og:image", content:"http://www.test.carobnanota.com/car.jpg", vmid:'og:image'},
      {property:"og:site_name", content:"Carobna Nota", vmid:'og:site_name'},
      {property:"og:description", content:"Muzicka radionica, Hor, Skola", vmid:'og:description'},
      {property:"og:title", content:"Carobna nota", vmid:'og:title'},
    ]

   }

   },
      created(){
      //  this.height=1000
      var self=this;
      axios.get('media')
      .then(response=>this.media=response.data)
      .then(function(response){
        self.testingmodel();
        console.log(window.matchMedia("(max-width: 700px)"));
    });

  //  console.log(this.home_page);



     },
     methods:{
       mobi:function(t){
         if(window.matchMedia("(max-width: 500px)").matches && t==315){
           return 190;
         }else{
           return t;
         }
       },
       testingmodel:function(){
         let ckeditor14 = document.createElement('script');    ckeditor14.setAttribute('src',"js/main.js");
         document.head.appendChild(ckeditor14);
       }
     },
      mounted() {
        let ckeditor1 = document.createElement('script');    ckeditor1.setAttribute('src',"js/jquery-3.3.1.min.js");
        document.head.appendChild(ckeditor1);

        let ckeditor2 = document.createElement('script');    ckeditor2.setAttribute('src',"js/jquery-migrate-3.0.1.min.js");
        document.head.appendChild(ckeditor2);

        let ckeditor3 = document.createElement('script');    ckeditor3.setAttribute('src',"js/jquery-ui.js");
        document.head.appendChild(ckeditor3);

        let ckeditor4 = document.createElement('script');    ckeditor4.setAttribute('src',"js/popper.min.js");
        document.head.appendChild(ckeditor4);

        let ckeditor5 = document.createElement('script');    ckeditor5.setAttribute('src',"js/bootstrap.min.js");
        document.head.appendChild(ckeditor5);

        let ckeditor6 = document.createElement('script');    ckeditor6.setAttribute('src',"js/owl.carousel.min.js");
        document.head.appendChild(ckeditor6);

        let ckeditor7 = document.createElement('script');    ckeditor7.setAttribute('src',"js/mediaelement-and-player.min.js");
        document.head.appendChild(ckeditor7);

        let ckeditor8 = document.createElement('script');    ckeditor8.setAttribute('src',"js/jquery.stellar.min.js");
        document.head.appendChild(ckeditor8);

        let ckeditor9 = document.createElement('script');    ckeditor9.setAttribute('src',"js/jquery.countdown.min.js");
        document.head.appendChild(ckeditor9);

        let ckeditor10 = document.createElement('script');    ckeditor10.setAttribute('src',"js/jquery.magnific-popup.min.js");
        document.head.appendChild(ckeditor10);

        let ckeditor11 = document.createElement('script');    ckeditor11.setAttribute('src',"js/bootstrap-datepicker.min.js");
        document.head.appendChild(ckeditor11);

        let ckeditor12 = document.createElement('script');    ckeditor12.setAttribute('src',"js/aos.js");
        document.head.appendChild(ckeditor12);

        let ckeditor13 = document.createElement('script');    ckeditor13.setAttribute('src',"js/circleaudioplayer.js");
        document.head.appendChild(ckeditor13);

        // let ckeditor14 = document.createElement('script');    ckeditor14.setAttribute('src',"js/main.js");
        // document.head.appendChild(ckeditor14);
}
    }
</script>
