<template>
<div>
  <div class="site-blocks-cover overlay" style="background-image: url('car.png'); min-height:220px; height:220px;" data-aos="fade" data-stellar-background-ratio="0.5" >
  <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
       <div id="playerContainer" style="display:none"></div>

          </div>
        </div>

      </div>

      <h1 style=" position:absolute; bottom:0px; left:50%; transform: translate(-50%);
      background:rgba(255, 255, 255, 0.61); color:#0088b0; border-radius:25px; font-size:200%;">Koncerti</h1>
    </div>
    <!-- <br> -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="site-section-heading text-center mb-5 w-border col-md-6 mx-auto" data-aos="fade-up">
            <h2 class="mb-5">Putovanja &amp; nastupi</h2>
            
          </div>
        </div>
        <div class="row">
          <div v-for="eve in events" class="col-md-6 col-lg-4" data-aos="fade-up"
          :data-aos-delay="stil(eve.br)">
            <router-link v-bind:to="'/single_event/'+eve.id" exact>  <a ><img :src="eve.naslovna_slika" alt="Image" class="img-fluid"></a></router-link>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">{{formateddate(eve.datum)[0]}} {{formateddate(eve.datum)[1]}} {{formateddate(eve.datum)[2]}}</span>
            <router-link v-bind:to="'/single_event/'+eve.id" exact>  <h2 class="h5 text-black mb-3" style="text-align:center;"><a>{{eve.naslov}}</a></h2></router-link>
              <p>{{formatedtext(eve.text)}}</p>
              <router-link v-bind:to="'/single_event/'+eve.id" exact>Procitaj vise</router-link>
            </div>
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

              events: {},
          //    display:'block'
          }
      },
      metaInfo() {
        return{
     title: 'Putovanja i koncerti -Carobna nota',
  //   titleTemplate: '%s - Home',

     meta: [
      { name: 'twitter:title', content: 'Putovanja i koncerti -Carobna nota', vmid:'twitter:title' },
      { name: 'twitter:description', content: 'Muzicka radionica, Hor, Skola', vmid:'twitter:description' },
      { name: 'twitter:image', content: 'http://www.test.carobnanota.com/car.jpg', vmid:'twitter:image' },

      {property:"og:type", content:"website", vmid:'og:type'},
      {property:"og:url", content:"http://www.carobnanota.com/#/events", vmid:'og:url'},
      {property:"og:image", content:"http://www.test.carobnanota.com/car.jpg", vmid:'og:image'},
      {property:"og:site_name", content:"Carobna Nota", vmid:'og:site_name'},
      {property:"og:description", content:"Muzicka radionica, Hor, Skola", vmid:'og:description'},
      {property:"og:title", content:"Putovanja i koncerti -Carobna nota", vmid:'og:title'},
    ]

   }

   },
      created(){
      //  this.height=1000
      var self=this;
      axios.get('events')
      .then(response=>this.events=response.data)
      .then(function(response){
        self.testingmodel();
          console.log(response);
    });

  //  console.log(this.home_page);



     },
     methods:{
       stil: function(br){
         if(br==1){
           return '100';
         }else if(br==2){
           return '300';
         }else{
           return '900';
         }
       },
       testingmodel:function(){
         let ckeditor14 = document.createElement('script');    ckeditor14.setAttribute('src',"js/main.js");
         document.head.appendChild(ckeditor14);
       },
       formateddate:function(d){
     let arr = d.split(/[- :]/);
     var months = new Array('Januar', 'Februar', 'Mart',
                     'April', 'Maj', 'Jun', 'Jul', 'Avgust',
                     'Septembar', 'Oktobar', 'Novembar', 'Decembar');
    // console.log(arr);
     let date = new Date(Date.UTC(arr[0], arr[1], arr[2]));

     return [date.getDate(), months[(date.getMonth()-1)] ,date.getFullYear()]
   },
   formatedtext:function(t){
  //   var myDiv = $('#your-div-id');
  return   t.substring(0, 100);
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
