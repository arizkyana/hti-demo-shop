<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Honda Trading Indonesia - Store</title>

 <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="roboto relative overflow-x-hidden">
 {{-- header --}}
 <nav class="bb b--black-10">
  <div class="pv3 ph5">
   <div class="flex items-stretch">
     <div class="w-10-m w-10-l w-100 self-center">
       <img src="{{ asset('images/logo.png') }}" alt="logo.png" class="w-100" />
     </div>
     <div class="w-70-m w-70-l w-100 self-center ph2">
       <div>PT. Honda Trading Indonesia</div>
     </div>
   </div>
  </div>
 </nav>
 {{-- /header --}}

 <div class="pv5 ph5">
  <div class="cf">
   <div class="fl w-20-ns dib-ns dn pr2">
    <div class="ba b--black-10">
      <div class="pv2 pl2 bg-light-gray">
        <span class="b">Category</strong>
      </div>
      <div>
        <ul class=" list">
          <li class="pointer">
            <label for="cat_part" class="pointer">
              <input type="checkbox" name="cat_part" id="cat_part" checked /> Part
            </label>
            <ul class="list">
              <li>
                <label for="cat_4w" class="pointer">
                  <input type="checkbox" name="cat_4w" id="cat_4w" /> 4W
                </label>
              </li>
              <li>
                <label for="cat_2w" class="pointer">
                  <input type="checkbox" name="cat_2w" id="cat_2w" /> 2W
                </label>
              </li>
            </ul>
          </li>
          <li class="pointer">
            <label for="cat_steel" class="pointer">
              <input type="checkbox" name="cat_steel" id="cat_steel" /> Steel
            </label>
          </li>
          <li class="pointer">
            <label for="cat_machinery" class="pointer">
              <input type="checkbox" name="cat_machinery" id="cat_machinery" /> Machinery
            </label>
          </li>
        </ul>
      </div>
    </div>
   </div>
   <div class="fl w-80-ns w-100">
    <div class="cf">
      
      <div class="fl w-100-ns ph1 ">
        <input type="text" name="search" class="ba b--black-10 pa2 w-100 outline-0" placeholder="Search product"/>
      </div>
    </div>
    <div class="cf">
     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

    </div>

    <div class="cf">
     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

    </div>

    <div class="cf">
     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

     <div class="fl w-25-ns w-100 pv2  pointer ">
      <div class="mv1 pa1">
        <div>
         <img src="{{ asset('images/ALUMINUM INGOT.png') }}" alt="product1.png" />
        </div>
        <div class=" flex items-between">
         <div class="pv3 w-50"><span class="gray self-centered f6">Alumunium Ingot</span></div>
         <div class=" pv3 tr w-50">
          <a href="{{ url('shop') }}" class="ba b--blue-10 bg-blue white pa2 dim no-underline f6">Shop now</a>
         </div>
        </div>
      </div>
     </div>

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