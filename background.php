<!DOCTYPE html>
<html lang="en">

<style>
    html,
    body {
        height: 100%
    }

    body {
        background-color: #f9f9f9;
    }

    h1 {
        text-align: center;
    }

    .background {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: -1;
    }
</style>
<script>
    window.onload = function() {
        var particles = Particles.init({
            selector: '.background',
            color: ['#5CFAD2', '#62C4EF', '#A9FA5C'],
            connectParticles: true
        });
    };
</script>
<canvas class="background"></canvas>
<script src="js/particles.min.js"></script>


</html>