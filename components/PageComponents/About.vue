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

      <h1 style=" position:absolute; bottom:0px;

    left:50%; transform: translate(-50%); background:rgba(255, 255, 255, 0.61); color:#0088b0; border-radius:25px; font-size:200%;">O nama</h1>
    </div>
    <!-- <br> -->
    <div class="site-section bg-light block-13">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto">
            <h2 class="mb-5">MUZIČKA SKOLA I RADIONICA</h2>
            <p>Muzička radionica i hor Čarobna Nota ulica Radoja Dakića 49,Duvanište,Nis <br> br.tel:069/276-2790</p>
          </div>
        </div>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="nonloop-block-13 owl-carousel">



          <div class="text-center p-3 p-md-5 bg-white"  v-for="stuff in about_page[1]" v-bind:key='stuff.id'>
            <div class="mb-4">
              <img v-bind:src="stuff.img" alt="Image" class="w-50 mx-auto img-fluid rounded-circle">
            </div>
            <div class="">
              <h3 class="font-weight-light h5">{{stuff.title}}</h3>
              <p class="font-italic">&ldquo;{{stuff.text}}&rdquo;</p>
            </div>
          </div>

        </div>
      </div>
    </div>

</div>
</template>
<script>
    export default {
      data () {
          return {

              about_page: {},
              title_title:''
          //    display:'block'
          }
      },
      metaInfo() {
        return{
     title: 'O nama -Carobna nota',
  //   titleTemplate: '%s - Home',

//     const  set  = vm.$meta().addApp('custom')


     meta: [
      { vmid:'twitter:title', name: 'twitter:title', content: 'O nama -Carobna nota' },
      { vmid:'twitter:description', name: 'twitter:description', content: 'Muzicka radionica, Hor, Skola' },
      { vmid:'twitter:image', name: 'twitter:image', content: 'http://www.test.carobnanota.com/office.jpg' },
      { vmid: 'og:type', property:"og:type", content:"website"},
      { vmid: 'og:url', property:"og:url", content:"http://www.carobnanota.com/#/about"},
      { vmid: 'og:image', property:"og:image", content:"http://www.test.carobnanota.com/office.jpg"},
      { property:"og:site_name", content:"Carobna Nota"},
      {   vmid: 'og:description', property:"og:description", content:"Muzicka radionica, Hor, Skola"},
      {   vmid: 'og:title', property: 'og:title',  content: 'O nama'},
    ]


   }

   },
      created(){
      //  this.height=1000
      var self=this;
      axios.get('about')
      .then(response=>this.about_page=response.data)
      .then(function(){
        self.testingmodel();
      //  self.title_title=self.home_page[0].title;
    //     console.log(self.about_page);


    });


     },
     methods:{
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
