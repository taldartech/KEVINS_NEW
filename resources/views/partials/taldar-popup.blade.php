{{-- <div class="ad-popup" id="taldarPopup" >
    <button class="ad-popup-close" onclick="document.getElementById('taldarPopup').style.display='none'">&times;</button>
    <h3>Special Tech Offer!</h3>
    <p>Transform your business with expert tech solutions from Taldar Tech Consultancy. Get professional IT services tailored to your needs!</p>
    <a href="https://taldartechconsultancy.com/" target="_blank" rel="noopener">Learn More</a>
</div> --}}
@if($activePopup)
<div class="ad-popup" id="taldarPopup">
    <button class="ad-popup-close" onclick="document.getElementById('taldarPopup').style.display='none'">&times;</button>
    
    <h3>{{ $activePopup->title }}</h3>
    <p>{{ $activePopup->content }}</p>
    <a href="{{ $activePopup->link }}" target="_blank" rel="noopener">Learn More</a>
</div>
@endif