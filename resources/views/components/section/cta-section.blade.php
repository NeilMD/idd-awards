<div class="cta">
        @if ($page === 'home' )

            <a href="https://www.showpass.com/sait-ignite-awards-2025/"><button class="cta-btn" >Get Tickets</button></a>
            <a href="{{ url('awards') }}"> <button class="cta-btn" >See Awards</button></a> 

        @elseif ($page === 'ignite')

            <a href="https://forms.office.com/r/VP8h1PE826"><button class="cta-btn" >Vote Here!</button></a>

        @elseif ($page === 'awards')
            <a href="https://forms.office.com/r/VP8h1PE826"><button class="cta-btn" >Submit your work!</button></a>
        @endif
      
    
</div>