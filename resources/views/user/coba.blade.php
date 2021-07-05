<form action="{{route('h.s')}}" method="POST" class="booking-form" id="myForm" action="donate.php">
    {{ csrf_field() }}
        <div class="row">
            <div class="col-lg-12 d-flex flex-column">
                <select name="news" id="news" class="app-select form-control" required>
                   <option data-display="Project you want to donate">Project you want to donate</option>
                   <option value="Banjir NTT">Banjir NTT</option>
                   <option value="Panti Asuhan A">Panti Asuhan A</option>
                   <option value="Panti Asuhan B">Panti Asuhan B</option>
               </select>
            </div>
            <div class="col-lg-6 d-flex flex-column">
               <input name="name" id="name" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="form-control mt-20" required="" type="text" required>
           </div>
           <div class="col-lg-6 d-flex flex-column">
               <input name="phone" id="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone Number'" class="form-control mt-20" required="" type="number">
           </div>
           <div class="col-lg-12 d-flex flex-column">
               <textarea class="form-control mt-20" name="address" id="address" placeholder="Alamat" required=""></textarea>
               <input name="resi" id="resi" placeholder="No. Resi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No. Resi'" class="form-control mt-20" required="" type="text">
           </div>
           {{-- <div class="col-lg-12 d-flex flex-column">
               <select name="type" id="expedition" class="app-select form-control" required>
                  <option data-display="--Pilih Ekspedisi--">--Pilih Ekspedisi--</option>
                  <option value="1">JNE</option>
                  <option value="2">J&T</option>
                  <option value="3">Sicepat</option>
              </select>
           </div> --}}
           <div class="col-lg-12 d-flex justify-content-end send-btn">
               <button type="submit" class="submit-btn primary-btn mt-20 text-uppercase ">Donate<span class="lnr lnr-arrow-right"></span></button>
           </div>

           <div class="alert-msg"></div>
       </div>
 </form>

 