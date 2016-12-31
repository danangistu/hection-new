<!-- FULLSCREEN SLIDER -->
<div class="tp-banner-container">
  <div class="tp-banner">
<ul>
  @foreach($sliders as $slider)
    <li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-thumb="{{ asset($slider->picture) }}"  data-saveperformance="off"  data-title="Slide">
        <!-- MAIN IMAGE -->
        <img src="{{ asset($slider->picture) }}"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
        <!-- LAYERS -->

        <!-- LAYER NR. 1 -->
        <div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme"
            data-x="center" data-hoffset="250"
            data-y="center" data-voffset="-70"
            data-speed="600"
            data-start="800"
            data-easing="Power4.easeOut"
            data-splitin="none"
            data-splitout="none"
            data-elementdelay="0.01"
            data-endelementdelay="0.1"
            data-endspeed="500"
            data-endeasing="Power4.easeIn"
            style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">{{ $slider->layer1 }}
        </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme"
            data-x="center" data-hoffset="205"
            data-y="center" data-voffset="-10"
            data-speed="600"
            data-start="900"
            data-easing="Power4.easeOut"
            data-splitin="none"
            data-splitout="none"
            data-elementdelay="0.01"
            data-endelementdelay="0.1"
            data-endspeed="500"
            data-endeasing="Power4.easeIn"
            style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">{{ $slider->layer2 }}
        </div>
    </li>
  @endforeach
</ul>
<div class="tp-bannertimer"></div>
  </div>
</div>
