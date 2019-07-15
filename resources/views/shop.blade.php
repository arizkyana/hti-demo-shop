<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Honda Trading Indonesia - Store</title>

 <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="roboto relative vh-100">
 {{-- header --}}
 <nav class="bb b--black-10">
  <div class="pv3 ph5">
    <a class="pointer" href="/">
     <img src="{{ asset('images/logo.png') }}" alt="logo.png" class="w-10-m w-10-l w-20" />
    </a>
  </div>
 </nav>
 {{-- /header --}}

 <div class="pv5 ph5 w-100 ">
  <div class="cf">
   <div class="fl  w-30-m w-30-l w-100">
    <span class="b fw1">Item</strong>
    <div class="pv3 pr4">
     <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="shop.png" />
     <div class="pv3 tc">
      <span class="b gray">Alumunium Ingot</span>
     </div>
    </div>
   </div>

   <div class="fl w-70-m w-70-l w-100 ">
    <span class="b fw1">Form</strong>
    <div class="pv3">
     <form method="POST">
      <div class="flex flex-column pv2">
       <label for="" class="pv2">Name</label>
       <input type="text" name="name" class="pv2 ph2 outline-0" placeholder="Name" />
      </div>

      <div class="flex flex-column pv2">
       <label for="" class="pv2">Company name</label>
       <input type="text" name="company_name" class="pv2 ph2 outline-0" placeholder="Company name" />
      </div>

      <div class="flex flex-column pv2">
       <label for="" class="pv2">Email</label>
       <input type="email" name="email" class="pv2 ph2 outline-0" placeholder="Email" />
      </div>

      <div class="flex flex-column pv2">
       <label for="" class="pv2">No Telp</label>
       <input type="text" name="no_telp" class="pv2 ph2 outline-0" placeholder="No Telp" />
      </div>

      <div class="flex flex-column pv2">
       <label for="" class="pv2">Category bussiness</label>
       <select name="category_bussiness" class="ba b--black-10 pv2" id="">
        <option value="">Choose category</option>
        <option value="part">Part</option>
        <option value="machine">Machine</option>
        <option value="material">Material</option>
       </select>
      </div>

      <div class="flex flex-column pv2">
       <label for="" class="pv2">Detail inquiry</label>
       <textarea name="detail_inquiry" class="pv2 ph2 outline-0 ba b--black-10" id="" cols="30" rows="10"></textarea>
      </div>

      <div class="pv2 tr">
       <a href="/" class="link dim gray ph4">Cancel</a>
       <button class="bg-blue ba b--blue pa3 w-100 w-25-ns w-25-m w-25-l pointer dim white " type="submit">Order</button>
      </div>

     </form>
    </div>
   </div>
   
  </div>
 </div>

  <footer class="bg-white">
  <div class="bt b--black-10"> 
    <div class="pv3 ph5 w-50-ns w-50-m w-50-l w-80 center ">
      <div class="tc pv2">
        <img src="{{ asset('images/logo.png') }}" alt="logo.png" class="w-30 center" />
        <dd class="mt3">
          <dt class="f6 fw3">Mid Plaza 16th Floor, Jl. Jend. Sudirman, Kav, 10 - 11,</dt>
          <dt class="f6 fw3">Jakarta, RT 10 / RW 11, Karet Tengsin, Central Jakarta City,</dt>
          <dt class="f6 fw3">Jakarta 10250</dt>
        </dd>
      </div>
    </div>
  </div>
  <div class="bt b--black-10"> 
    <div class="pv3 ph5 w-50-ns w-50-m w-50-l w-80 center ">
      <div class="tc ">
        <div class="f6 b">&copy; 2019 | PT. Honda Trading Indonesia</div>
      </div>
    </div>
  </div>
 </footer>
</body>
</html>