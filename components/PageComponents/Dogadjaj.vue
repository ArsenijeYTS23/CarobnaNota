<template>
<div>
  <div class="site-blocks-cover overlay" style="background-image: url('car.png'); min-height:220px; height:220px;"
   data-aos="fade" data-stellar-background-ratio="0.5" >
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
       background:rgba(255, 255, 255, 0.61); color:#0088b0; border-radius:25px; font-size:200%;">{{single_event.naslov}}</h1>
    </div>
    <!-- <br> -->
    <div class="site-section">
      <div class="container">

        <div class="row" >
          <div class="col-md-12 mb-3" data-aos="fade-up"><h2 class="text-primary h4" style="color:#61165a!important;">{{single_event.naslov}}</h2></div>
          <div class="col-lg-5 ml-auto order-lg-2 mb-5" data-aos="fade-up" data-aos-delay="200">
            <img :src="single_event.naslovna_slika" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <p class="lead">{{single_event.text}}</p>
          </div>

        </div>
      </div>
    </div>
    <div class="site-section bg-light block-13">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">Slike</h2>
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-right">
        <div class="nonloop-block-13 owl-carousel">
          <div   v-for="img in single_event.eventpics" v-bind:key='img.id'>
      <img v-bind:src="img.slika" alt="Image" class="img-fluid">
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
              </div>
            </div>
          </div>


          <div class="container" data-aos="fade-up">

                       <div class="row">


          <iframe v-for="video_event in single_event.eventvideos" v-bind:key='video_event.id' v-bind:src="video_event.video"
           v-bind:width="video_event.width" v-bind:height="mobi(video_event.height)"
            style="border:none;overflow:hidden; margin:5px;" scrolling="no" frameborder="0"
             allowTransparency="true" allowFullScreen="true"></iframe>
           </div>

            <!-- <div  v-for="video_event in single_event.eventvideos" v-if="video_event.width===267" v-bind:key='video_event.id'>

          <iframe v-bind:src="video_event.video"
           v-bind:width="video_event.width" v-bind:height="video_event.height"
            style="border:none;overflow:hidden; margin:10px;" scrolling="no" frameborder="0"
             allowTransparency="true" allowFullScreen="true"></iframe>
                          </div> -->



                </div>
      </div>

</div>
</template>
<script>
    export default {
      data () {
          return {
            single_event:{},
                media:{},
              home_page: {},
              title_title:'',
              id:this.$route.params.id
          //    display:'block'
          }
      },
      metaInfo() {
        return{
     title: this.single_event.naslov,

     meta: [
      { name: 'twitter:title', content: this.single_event.naslov, vmid:'twitter:title' },
      { name: 'twitter:description', content: this.single_event.text, vmid:'twitter:description' },
      { name: 'twitter:image', content: 'http://www.test.carobnanota.com/'+this.single_event.naslovna_slika, vmid:'twitter:image' },

      {property:"og:type", content:"website", vmid:'og:type'},
      {property:"og:url", content:"http://www.test.carobnanota.com/#/single_event/"+ this.single_event.id, vmid:'og:url'},
      {property:"og:image", content:'http://www.test.carobnanota.com/'+this.single_event.naslovna_slika, vmid:'og:image'},
      {property:"og:site_name", content:"Carobna Nota", vmid:'og:site_name'},
      {property:"og:description", content:this.single_event.text, vmid:'og:description'},
      {property:"og:title", content:this.single_event.naslov, vmid:'og:title'},
    ]

   }

   },
      created(){
      //  this.height=1000
      var self=this;
      axios.get('single_event/'+this.id)
      .then(response=>this.single_event=response.data)
      .then(function(response){
        self.testingmodel();
      //  self.title_title=self.home_page[0].title;
        console.log(response);


    });
  //    console.log(this.single_event.eventvideos);


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
       },
       formatedtext:function(t){
      //   var myDiv = $('#your-div-id');
      return   t.substring(0, 10);
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
