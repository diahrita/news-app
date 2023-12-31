<div class="banner-area banner-inner-1 bg-black" id="banner">
  <!-- banner area start -->
  <div class="banner-inner pt-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="thumb after-left-top">
                      <img src="news-assets/img/banner/1.png" alt="img">
                  </div>
              </div>
              <div class="col-lg-6 align-self-center">
                  <div class="banner-details mt-4 mt-lg-0">
                      <div class="post-meta-single">
                          <ul>
                              <li><a class="tag-base tag-blue" href="#">Tech</a></li>
                              <li class="date"><i class="fa fa-clock-o"></i>08.22.2020</li>
                          </ul>
                      </div>
                      <h2>ReZoom outage left some people locked out.</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                      <a class="btn btn-blue" href="#">Read More</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- banner area end -->
 
  <div class="container">
    
      <div class="row"> 
        @foreach ($data as $data)
          <div class="col-lg-3 col-sm-6">
              <div class="single-post-wrap style-white">
                  <div class="thumb">
                    <img src="{{asset($data->image)}}">
                      <a class="tag-base tag-blue" href="#">{{ $data->category->nama}}</a>
                  </div>
                  <div class="details">
                      <h6 class="title"><a href="#">{{$data->judul}}</a></h6>
                      <div class="post-meta-single mt-3">
                          <ul>
                              <li><i class="fa fa-clock-o"></i>{{$data->published_at}}</li>
                          </ul>
                      </div>
                  </div>
              </div>
            </div>
          @endforeach
      </div>
  </div> 
   
</div>