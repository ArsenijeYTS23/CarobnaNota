<template>
<div>
  <div class="site-blocks-cover overlay" style="background-image: url('car.png');" data-aos="fade" data-stellar-background-ratio="0.5" >
    <!-- <div class="site-blocks-cover overlay" style="background-image: url('car.jpg');" data-aos="fade" data-stellar-background-ratio="0.5" data-aos="fade"> -->
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
          <div id="playerContainer"></div>

          </div>
        </div>
      </div>

    </div>
    <br>
    <div class="site-section">
      <div class="container">

        <div class="row" v-for="home in home_page" v-bind:key='home.id'>
          <div class="col-md-12 mb-3" data-aos="fade-up"><h2 class="text-primary h4" style="color:#61165a!important;">{{home.title}}</h2></div>
          <div class="col-lg-5 ml-auto order-lg-2 mb-5" data-aos="fade-up" data-aos-delay="200">
            <img src="images/home/1.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-6 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <p class="lead">{{home.text}}</p>
            <h3>Miljana Radivojevic</h3>
              <p class="lead">{{home.textbio}}</p>

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
              meta_title:'',
              home_page: {},
          //    display:'block'
          }
      },
      metaInfo() {
        return{
     title: 'Carobna nota',
  //   titleTemplate: '%s - Home',

     meta: [
      { name: 'twitter:title', content: 'Carobna Nota', vmid:'twitter:title' },
      { name: 'twitter:description', content: 'Muzicka radionica, Hor, Skola', vmid:'twitter:description' },
      { name: 'twitter:image', content: 'http://www.carobnanota.com/car.jpg', vmid:'twitter:image' },

      {property:"og:type", content:"website", vmid:'og:type'},
      {property:"og:url", content:"http://www.carobnanota.com", vmid:'og:url'},
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
      axios.get('home_page')
      .then(response=>this.home_page=response.data)
      .then(response=>this.meta_title=this.home_page[0].title)
      .then(function(response){
        //  this.meta_title=response[0].title;
    //    console.log(self.meta_title=self.home_page[0].title);
    });

  //  console.log(this.home_page);



     },
      mounted() {
        console.log(this.home_page);
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
//
let ckeditor12 = document.createElement('script');    ckeditor12.setAttribute('src',"js/aos.js");
document.head.appendChild(ckeditor12);
//
let ckeditor13 = document.createElement('script');    ckeditor13.setAttribute('src',"js/circleaudioplayer.js");
document.head.appendChild(ckeditor13);

let ckeditor14 = document.createElement('script');    ckeditor14.setAttribute('src',"js/main.js");
document.head.appendChild(ckeditor14);


// AOS.init({
//  duration: 800,
//  easing: 'slide',
//  once: true
// });
}

    }
</script>
