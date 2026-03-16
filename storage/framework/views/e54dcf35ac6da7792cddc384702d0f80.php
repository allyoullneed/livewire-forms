<!DOCTYPE html>
<html
    x-data="{ 
        scrolled: false,
        resizing: false
    }"
    x-on:scroll.window="scrolled = (window.scrollY > 0)"
    x-on:resize.window="resizing = true; clearTimeout(resizeTo); resizeTo = setTimeout(() => { resizing = false;}, 60);"
>
    
    <head>
        <script is:inline>
            const theme = localStorage.getItem("data-theme") || "light";
            document.querySelector("html").classList.add(theme);
            document.documentElement.dataset.theme = theme;
        </script>
        <link rel="icon" type="image/webp" href="/assets/logo-xs.webp">
        <title>All you need &gt; <?php echo e($title ?? ''); ?></title>
        <meta charset="utf-8" />*
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta
            name="robots"
            content="max-image-preview:large, max-snippet:-1, max-video-preview:-1"
        />
        <meta property="og:locale" content="en_US" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>
        <?php
            $vite = new Illuminate\Foundation\Vite();

        ?>
        <link rel="stylesheet" href="http://allyouneed.local/site.css">
        <link rel="stylesheet" href="<?php echo e($vite->asset('resources/css/site-daisy.css')); ?>" data-navigate-track="reload" <?php if( str_contains($_COOKIE['_x_twplugin'] ?? 'daisy', 'flyon')): echo 'disabled'; endif; ?>>
        <link rel="stylesheet" href="<?php echo e($vite->asset('resources/css/site-flyon.css')); ?>" data-navigate-track="reload" <?php if(!str_contains($_COOKIE['_x_twplugin'] ?? 'daisy', 'flyon')): echo 'disabled'; endif; ?>>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/site.js']); ?>
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    </head>

    <body
        class="min-h-screen font-sans leading-normal text-justify transition-colors duration-500
            <?php echo $__env->yieldContent('bodyclass'); ?>"
        :class="scrolled ? 'scrolled' : ''"
    >
        <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>

        <main class="container mx-auto mb-6 p-4 mt-24 min-h-[calc(100vh+1px-91*var(--spacing))]
            [&_table_th]:p-2 [&_table_th]:border-1 [&_table_th]:border-base-300
            [&_table_td]:p-2 [&_table_td]:border-1 [&_table_td]:border-base-300
            [&_h2]:text-3xl [&_h3]:text-2xl [&_h4]:text-xl [&_h5]:text-lg [&_h2]:font-medium [&_h3]:font-medium
            [&_*_+_h2]:mt-12 [&_*_+_h3]:mt-6 [&_*_+_:is(h4,h5,p,table)]:mt-4
            [&_ol]:list-decimal [&_ul]:list-disc [&_:is(ol,ul)]:ms-8 [&_li]:mt-2
            [&_a:not(.btn)]:underline [&_a:not(.btn)]:decoration-accent
            [&_.preview_ul]:list-none [&_.preview_:is(ol,ul)]:ms-0 [&_.preview_:is(li,p)]:!mt-0
            [&_.preview_a]:!no-underline
            <?php echo $__env->yieldContent('main_style'); ?>
        ">
            <?php if(isset($template_content)): ?>
               <?php echo $template_content; ?>

            <?php elseif(isset($slot)): ?>
               <?php echo $slot; ?>

            <?php else: ?>
                <?php echo $__env->yieldContent('body'); ?>
            <?php endif; ?>
        </main>
        <?php echo $__env->yieldContent('appendix'); ?>
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    </body>

</html>
<?php /**PATH /var/www/allyouneed.local/resources/views/layouts/app.blade.php ENDPATH**/ ?>