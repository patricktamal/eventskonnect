<footer class="main-footer">
    <div class="footer-left">
      {{\App\Models\Setting::find(1)->footer_copyright}} <div class="bullet"></div> {{__('Made with')}} <i class="fas fa-heart text-danger"></i> {{__('By')}} <a href="https://www.linkedin.com/in/patrick-tamal/">Patrick Tamo.</a>
    </div>
    <div class="footer-right">
      {{\App\Models\Setting::find(1)->app_version}}
    </div>
</footer>
