<script>
export default{

}
</script>

<template>
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="hero-wrap position-relative overflow-hidden">
                <div class="hero-item positioon-absolute" style="background: url('//via.placeholder.com/1920x1080');">
                    <div class="overlay"></div>
                    <div class="position-relative">
                        <h4>Туроператор сибири</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-block col-lg-4">
            <div class="row flex-column">
                <div class="col w-100 mb-4">
                    <div class="additional-item" style="background: url('//via.placeholder.com/800x400');"></div>
                </div>
                <div class="col w-100">
                    <div class="additional-item" style="background: url('//via.placeholder.com/800x400');"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<style lang="sass" scoped>
.hero-wrap
    min-height: 250px
    @media (min-width: 768px)
        min-height: 300px
    @media (min-width: 992px)
        min-height: 450px
    width: 100%
    border-radius: $default-radius
    .hero-item
        width: 100%
        height: 100%
        min-height: 250px
        @media (min-width: 768px)
            min-height: 300px
        @media (min-width: 992px)
            min-height: 450px
        top: 0
        left: 0
        background-position: center !important
        background-size: cover !important
        background-repeat: no-repeat !important
        display: flex
        align-items: end
        justify-content: start
        color: $color-gray-light
        padding: 12px
        @media (min-width: 992px)
            padding: 24px
        h4
            margin-bottom: 0
        p
            margin-bottom: 0
.additional-item
    height: 100%
    min-height: 213px
    width: 100%
    background: $color-gray-regular
    border-radius: $default-radius
    background-position: center !important
    background-size: cover !important
    background-repeat: no-repeat !important
</style>