@extends('includes.main')

@section('main-section')

<!-- carusel -->
<div id="carouselExampleSlidesOnly" class="carousel slide slider" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/b1.jpeg" class="d-block w-100" alt="..." width="100%" height="400vh">
    </div>
    <div class="carousel-item">
      <img src="/images/b2.jpeg" class="d-block w-100" alt="..." width="100%" height="400vh">
    </div>
    <div class="carousel-item">
      <img src="/images/b3.jpeg" class="d-block w-100" alt="..." width="100%" height="400vh">
    </div>
  </div>
</div>
<!-- carusel end -->

<div class="container main-box">
  <h2>Select Your Study Goal</h2>
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 16rem;">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <img src="/images/student.svg" class="border border-1 rounded-circle p-2" alt="" width="60px"
                height="60px">
            </div>
            <div class="col">
              <h5>Engennering
              </h5>
              <p>4069 Colleges</p>
            </div>
          </div>
          <div class="degree">
            <a href="#">BE/B.Tech</a><br>
            <hr>
            <a href="#">Diploma in Engennering</a>
            <hr>
            <a href="#">ME/M.Tech</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 16rem;">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <img src="/images/graph.svg" class="border border-1 rounded-circle p-2" alt="" width="60px" height="60px">
            </div>
            <div class="col">
              <h5>Management
              </h5>
              <p>7775 Colleges</p>
            </div>
          </div>
          <div class="degree">
            <a href="#">MBA/PGDM</a><br>
            <hr>
            <a href="#">BBA/BBM</a>
            <hr>
            <a href="#">Executive MBA</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 16rem;">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <img src="/images/cart.svg" class="border border-1 rounded-circle p-2" alt="" width="60px" height="60px">
            </div>
            <div class="col">
              <h5>Commerce
              </h5>
              <p>5100 Colleges</p>
            </div>
          </div>
          <div class="degree">
            <a href="#">B.Com</a><br>
            <hr>
            <a href="#">M.Com</a>
            <hr>
            <a href="#">Commerce</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 16rem;">
        <div class="card-body">
          <div class="row">
            <div class="col">
              <img src="/images/arts.svg" class="border border-1 rounded-circle p-2" alt="" width="60px" height="60px">
            </div>
            <div class="col">
              <h5>Arts
              </h5>
              <p>6100 Colleges</p>
            </div>
          </div>
          <div class="degree">
            <a href="#">BA</a><br>
            <hr>
            <a href="#">MA</a>
            <hr>
            <a href="#">BSW</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- top collections -->
<div class="container-fluid top-collect">
  <div class="container main-box pt-5 pb-5">
    <h2>Top collections</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="/images/college.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6>Best Colleges for Diploma in Mechanical Engineering</h6>
            <a href="#">View Colleges</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="/images/college2.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6>Best Colleges for Diploma in Computer Application</h6>
            <a href="#">View Colleges</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="/images/college.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6>Best Colleges for Diploma in Mechanical Engineering</h6>
            <a href="#">View Colleges</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
