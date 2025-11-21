<style>
    footer{
    max-width:900px;
    margin:32px auto 24px auto;
    display:flex;
    justify-content:space-between;
    gap:24px;
    flex-wrap:wrap;
    color:#222;
    font-weight:600;
    font-size:1.08rem;
    }
    footer div{ flex-basis:45%; min-width:220px; }
    footer p{ margin:.2rem 0; font-weight:400; color:var(--muted); }
    footer p img {
             width: 20px; /* Ukuran icon */
             height: 20px;
             margin-right: 8px; /* Jarak antara icon dan teks */
             vertical-align: middle; /* Sejajar dengan teks */
         }
</style>

  <footer>
    <div>
      <p><strong>Hubungi Kami</strong></p>
      <p>UPTD PPD TANJUNGPINANG</p>
      <p>Jalan Basuki Rahmad, No.10, Tanjungpinang</p>
      <p><img src="{{ asset('image/icon-phone.webp') }}" alt="Telepon">(0771) 21581</p>
    </div>
    <div>
      <p><strong>Jam Layanan</strong></p>
      <p>Senin - Jumat : 08.00 - 15.00</p>
      <p>Sabtu : 08.00 - 12.00</p>
      <p><img src="{{ asset('image/icon-mail.webp') }}" alt="Email">uptppdpinang@gmail.com</p>
    </div>
  </footer>