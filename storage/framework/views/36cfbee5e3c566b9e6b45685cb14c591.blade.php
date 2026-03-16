

<div class="flex flex-col gap-8 items-center text-5xl mt-20 select-none">
  <div class="flex flex-col lg:flex-row gap-10 items-center">
    <div class="rounded-full size-40 overflow-hidden">
      <div  class="size-44 -mx-2">
        <img src="/assets/logo-sm.webp" alt="All you need logo" class=" -my-3"/>
      </div>
    </div>
    <div class="font-light">
      The
      <div class="dropping-texts text-primary">
        <div style="--roll-delay: 0s">Gorgeous</div>
        <div style="--roll-delay: 2s">Powerful</div>
        <div style="--roll-delay: 4s">Easy</div>
        <div style="--roll-delay: 6s">Dynamic</div>
        <div style="--roll-delay: 8s">Expressive</div>
        <style>
          .dropping-texts {
            display: inline-block;
            text-align: left;
            vertical-align: top;
            font-weight: bolder;
          }

          .dropping-texts > div {
            position:absolute;
            width: 130px;
            animation: roll 10s linear infinite var(--roll-delay);
          }
          .dropping-texts > div:not(:first-child) {
            transform: rotateX(90deg)
          }
          @keyframes roll {
            0% { transform-origin: bottom; transform: rotateX(-90deg) translate(0, 60%) }
            3% { transform: rotateX(0deg) }
            20% { transform-origin: top; transform: rotateX(0deg) }
            23% { transform: rotateX(90deg) translate(0, -60%) }
            100% { transform: rotateX(90deg) translate(0, -60%) }
          }
        </style>
      </div>
      <br/>Component Library <br class="md:hidden"/>for <br class="max-md:hidden"/>your next <br class="md:hidden"/><span style="font-weight:bolder">Laravel</span> project
    </div>
    <div class="flex flex-col gap-4">
      <div class="join gap-[1.8px]">
      ##BEGIN-COMPONENT-CLASS##@component('AllYoullNeed\AdvancedControls\View\Components\Button', 'button', ['color' => 'primary','icon' => 'heroicon-o-arrow-right','href' => '/docs/introduction'])
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'join-item','wire:navigate.hover' => true]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

        Get Started
       @endComponentClass##END-COMPONENT-CLASS##
      ##BEGIN-COMPONENT-CLASS##@component('AllYoullNeed\AdvancedControls\View\Components\Button', 'button', ['color' => 'primary','icon' => 'heroicon-o-arrow-down-tray','href' => '/docs/installation'])
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'join-item','wire:navigate.hover' => true]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

        Install
       @endComponentClass##END-COMPONENT-CLASS##
      </div>
      ##BEGIN-COMPONENT-CLASS##@component('AllYoullNeed\AdvancedControls\View\Components\Button', 'button', ['color' => 'secondary','icon' => 'heroicon-o-cpu-chip','href' => '/components'])
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:navigate.hover' => true]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

        Components
       @endComponentClass##END-COMPONENT-CLASS##
    </div>
  </div>
  <span class="text-current/50 text-lg text-left">
    Leverage the power of Livewire and your favorite Tailwind CSS plugin<br/>
    Supercharge Statamic with time-saving functionalities
  </span>
  <div class="flex flex-wrap justify-center gap-10">
    <div class="flex gap-10">
      <a href="https://laravel.com/" target="_blank"><?php

$__statamicResultuxndugm43BU6NOsiDfKlCHo9g7vnYrvfTagContent = <<<'CONTENTuxndugm43BU6NOsiDfKlCHo9g7vnYrvf'

CONTENTuxndugm43BU6NOsiDfKlCHo9g7vnYrvf;

$__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->setContent(base64_decode($__statamicResultuxndugm43BU6NOsiDfKlCHo9g7vnYrvfTagContent));
$__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->setTag(
    app(\Statamic\Tags\Loader::class)->load('svg', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/laravel.svg','class'=>'size-20']),
        'content' => '',
        'context' => [],
        'tag' => 'svg',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(false)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/laravel.svg','class'=>'size-20']));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->render();
}
unset($__statamicResultuxndugm43BU6NOsiDfKlCHo9g7vnYrvfTagContent);

if ($__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->isArray()) {
    $__currentLoopData = $__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->getValue();

    if ($__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValueuxndugm43BU6NOsiDfKlCHo9g7vnYrvf) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVarsuxndugm43BU6NOsiDfKlCHo9g7vnYrvf = get_defined_vars();
            $__restoreLoopVariablesuxndugm43BU6NOsiDfKlCHo9g7vnYrvf = $__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->getDefaultProtectedVariables();
            
            if ($__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->hasScope()) {
                ${$__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->getScopeName()} = $__statamicLoopValueuxndugm43BU6NOsiDfKlCHo9g7vnYrvf;
            } else {
                $__statamicLoopValueuxndugm43BU6NOsiDfKlCHo9g7vnYrvf = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValueuxndugm43BU6NOsiDfKlCHo9g7vnYrvf);
            
                if (is_array($__statamicLoopValueuxndugm43BU6NOsiDfKlCHo9g7vnYrvf) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValueuxndugm43BU6NOsiDfKlCHo9g7vnYrvf)) {
                    $__restoreLoopVariablesuxndugm43BU6NOsiDfKlCHo9g7vnYrvf = array_merge($__restoreLoopVariablesuxndugm43BU6NOsiDfKlCHo9g7vnYrvf, array_keys($__statamicLoopValueuxndugm43BU6NOsiDfKlCHo9g7vnYrvf));
                    
                    foreach ($__statamicLoopValueuxndugm43BU6NOsiDfKlCHo9g7vnYrvf as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?><?php
            
            if ($__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->hasScope()) {
                unset(${$__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariablesuxndugm43BU6NOsiDfKlCHo9g7vnYrvf as $__key) {
                if (isset($__statamicStachedVarsuxndugm43BU6NOsiDfKlCHo9g7vnYrvf[$__key])) {
                    $$__key = $__statamicStachedVarsuxndugm43BU6NOsiDfKlCHo9g7vnYrvf[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVarsuxndugm43BU6NOsiDfKlCHo9g7vnYrvf,
                $__restoreLoopVariablesuxndugm43BU6NOsiDfKlCHo9g7vnYrvf,
                $__statamicLoopValueuxndugm43BU6NOsiDfKlCHo9g7vnYrvf
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->canRenderAsString()) {
    echo $__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->renderString();
}

if ($__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->shouldRenderCompiledContent()):
?><?php
endif;

foreach ($__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->getProtectedVariables() as $__key) {
    if ($__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHostuxndugm43BU6NOsiDfKlCHo9g7vnYrvf
);
?></a>
      <a href="https://tailwindcss.com/" target="_blank"><?php

$__statamicResultEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12TagContent = <<<'CONTENTEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12'

CONTENTEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12;

$__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12 = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->setContent(base64_decode($__statamicResultEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12TagContent));
$__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->setTag(
    app(\Statamic\Tags\Loader::class)->load('svg', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/tailwind.svg','class'=>'size-20']),
        'content' => '',
        'context' => [],
        'tag' => 'svg',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(false)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/tailwind.svg','class'=>'size-20']));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->render();
}
unset($__statamicResultEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12TagContent);

if ($__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->isArray()) {
    $__currentLoopData = $__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->getValue();

    if ($__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValueEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVarsEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12 = get_defined_vars();
            $__restoreLoopVariablesEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12 = $__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->getDefaultProtectedVariables();
            
            if ($__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->hasScope()) {
                ${$__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->getScopeName()} = $__statamicLoopValueEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12;
            } else {
                $__statamicLoopValueEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12 = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValueEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12);
            
                if (is_array($__statamicLoopValueEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValueEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12)) {
                    $__restoreLoopVariablesEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12 = array_merge($__restoreLoopVariablesEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12, array_keys($__statamicLoopValueEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12));
                    
                    foreach ($__statamicLoopValueEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12 as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?><?php
            
            if ($__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->hasScope()) {
                unset(${$__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariablesEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12 as $__key) {
                if (isset($__statamicStachedVarsEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12[$__key])) {
                    $$__key = $__statamicStachedVarsEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVarsEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12,
                $__restoreLoopVariablesEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12,
                $__statamicLoopValueEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->canRenderAsString()) {
    echo $__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->renderString();
}

if ($__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->shouldRenderCompiledContent()):
?><?php
endif;

foreach ($__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->getProtectedVariables() as $__key) {
    if ($__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHostEKwPsv0bAw9ISIPLxNwWYCzLi2GH9l12
);
?></a>
      <a href="https://daisyui.com/" target="_blank"><?php

$__statamicResultQCpvlLeWwZMszDJX9XZAVAofmhF2EUHrTagContent = <<<'CONTENTQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr'

CONTENTQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr;

$__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->setContent(base64_decode($__statamicResultQCpvlLeWwZMszDJX9XZAVAofmhF2EUHrTagContent));
$__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->setTag(
    app(\Statamic\Tags\Loader::class)->load('svg', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/daisy.svg','class'=>'size-20']),
        'content' => '',
        'context' => [],
        'tag' => 'svg',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(false)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/daisy.svg','class'=>'size-20']));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->render();
}
unset($__statamicResultQCpvlLeWwZMszDJX9XZAVAofmhF2EUHrTagContent);

if ($__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->isArray()) {
    $__currentLoopData = $__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->getValue();

    if ($__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValueQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVarsQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr = get_defined_vars();
            $__restoreLoopVariablesQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr = $__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->getDefaultProtectedVariables();
            
            if ($__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->hasScope()) {
                ${$__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->getScopeName()} = $__statamicLoopValueQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr;
            } else {
                $__statamicLoopValueQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValueQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr);
            
                if (is_array($__statamicLoopValueQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValueQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr)) {
                    $__restoreLoopVariablesQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr = array_merge($__restoreLoopVariablesQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr, array_keys($__statamicLoopValueQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr));
                    
                    foreach ($__statamicLoopValueQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?><?php
            
            if ($__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->hasScope()) {
                unset(${$__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariablesQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr as $__key) {
                if (isset($__statamicStachedVarsQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr[$__key])) {
                    $$__key = $__statamicStachedVarsQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVarsQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr,
                $__restoreLoopVariablesQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr,
                $__statamicLoopValueQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->canRenderAsString()) {
    echo $__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->renderString();
}

if ($__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->shouldRenderCompiledContent()):
?><?php
endif;

foreach ($__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->getProtectedVariables() as $__key) {
    if ($__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHostQCpvlLeWwZMszDJX9XZAVAofmhF2EUHr
);
?></a>
    </div>
    <div class="flex gap-10">
      <a href="https://flyonui.com/" target="_blank"><?php

$__statamicResultw2n4g3Y5q7yhllHrRWat8syM5EYIEJOaTagContent = <<<'CONTENTw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa'

CONTENTw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa;

$__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->setContent(base64_decode($__statamicResultw2n4g3Y5q7yhllHrRWat8syM5EYIEJOaTagContent));
$__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->setTag(
    app(\Statamic\Tags\Loader::class)->load('svg', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/flyon.svg','class'=>'size-20']),
        'content' => '',
        'context' => [],
        'tag' => 'svg',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(false)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/flyon.svg','class'=>'size-20']));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->render();
}
unset($__statamicResultw2n4g3Y5q7yhllHrRWat8syM5EYIEJOaTagContent);

if ($__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->isArray()) {
    $__currentLoopData = $__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->getValue();

    if ($__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValuew2n4g3Y5q7yhllHrRWat8syM5EYIEJOa) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVarsw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa = get_defined_vars();
            $__restoreLoopVariablesw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa = $__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->getDefaultProtectedVariables();
            
            if ($__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->hasScope()) {
                ${$__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->getScopeName()} = $__statamicLoopValuew2n4g3Y5q7yhllHrRWat8syM5EYIEJOa;
            } else {
                $__statamicLoopValuew2n4g3Y5q7yhllHrRWat8syM5EYIEJOa = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValuew2n4g3Y5q7yhllHrRWat8syM5EYIEJOa);
            
                if (is_array($__statamicLoopValuew2n4g3Y5q7yhllHrRWat8syM5EYIEJOa) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValuew2n4g3Y5q7yhllHrRWat8syM5EYIEJOa)) {
                    $__restoreLoopVariablesw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa = array_merge($__restoreLoopVariablesw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa, array_keys($__statamicLoopValuew2n4g3Y5q7yhllHrRWat8syM5EYIEJOa));
                    
                    foreach ($__statamicLoopValuew2n4g3Y5q7yhllHrRWat8syM5EYIEJOa as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?><?php
            
            if ($__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->hasScope()) {
                unset(${$__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariablesw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa as $__key) {
                if (isset($__statamicStachedVarsw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa[$__key])) {
                    $$__key = $__statamicStachedVarsw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVarsw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa,
                $__restoreLoopVariablesw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa,
                $__statamicLoopValuew2n4g3Y5q7yhllHrRWat8syM5EYIEJOa
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->canRenderAsString()) {
    echo $__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->renderString();
}

if ($__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->shouldRenderCompiledContent()):
?><?php
endif;

foreach ($__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->getProtectedVariables() as $__key) {
    if ($__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHostw2n4g3Y5q7yhllHrRWat8syM5EYIEJOa
);
?></a>
      <a href="https://livewire.laravel.com/" target="_blank"><?php

$__statamicResultrqDhwUmhsqfciaPsrm4dmIghHDb0dPWKTagContent = <<<'CONTENTrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK'

CONTENTrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK;

$__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->setContent(base64_decode($__statamicResultrqDhwUmhsqfciaPsrm4dmIghHDb0dPWKTagContent));
$__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->setTag(
    app(\Statamic\Tags\Loader::class)->load('svg', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/livewire.svg','class'=>'w-20 h-16']),
        'content' => '',
        'context' => [],
        'tag' => 'svg',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(false)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/livewire.svg','class'=>'w-20 h-16']));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->render();
}
unset($__statamicResultrqDhwUmhsqfciaPsrm4dmIghHDb0dPWKTagContent);

if ($__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->isArray()) {
    $__currentLoopData = $__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->getValue();

    if ($__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValuerqDhwUmhsqfciaPsrm4dmIghHDb0dPWK) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVarsrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK = get_defined_vars();
            $__restoreLoopVariablesrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK = $__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->getDefaultProtectedVariables();
            
            if ($__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->hasScope()) {
                ${$__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->getScopeName()} = $__statamicLoopValuerqDhwUmhsqfciaPsrm4dmIghHDb0dPWK;
            } else {
                $__statamicLoopValuerqDhwUmhsqfciaPsrm4dmIghHDb0dPWK = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValuerqDhwUmhsqfciaPsrm4dmIghHDb0dPWK);
            
                if (is_array($__statamicLoopValuerqDhwUmhsqfciaPsrm4dmIghHDb0dPWK) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValuerqDhwUmhsqfciaPsrm4dmIghHDb0dPWK)) {
                    $__restoreLoopVariablesrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK = array_merge($__restoreLoopVariablesrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK, array_keys($__statamicLoopValuerqDhwUmhsqfciaPsrm4dmIghHDb0dPWK));
                    
                    foreach ($__statamicLoopValuerqDhwUmhsqfciaPsrm4dmIghHDb0dPWK as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?><?php
            
            if ($__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->hasScope()) {
                unset(${$__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariablesrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK as $__key) {
                if (isset($__statamicStachedVarsrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK[$__key])) {
                    $$__key = $__statamicStachedVarsrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVarsrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK,
                $__restoreLoopVariablesrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK,
                $__statamicLoopValuerqDhwUmhsqfciaPsrm4dmIghHDb0dPWK
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->canRenderAsString()) {
    echo $__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->renderString();
}

if ($__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->shouldRenderCompiledContent()):
?><?php
endif;

foreach ($__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->getProtectedVariables() as $__key) {
    if ($__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHostrqDhwUmhsqfciaPsrm4dmIghHDb0dPWK
);
?></a>
      <a href="https://statamic.com/" target="_blank"><?php

$__statamicResultFjqBmJAHyicl7FbqhphBpZbFqeRMyoOWTagContent = <<<'CONTENTFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW'

CONTENTFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW;

$__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->setContent(base64_decode($__statamicResultFjqBmJAHyicl7FbqhphBpZbFqeRMyoOWTagContent));
$__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->setTag(
    app(\Statamic\Tags\Loader::class)->load('svg', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/statamic.svg','class'=>'size-20']),
        'content' => '',
        'context' => [],
        'tag' => 'svg',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(false)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/statamic.svg','class'=>'size-20']));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->render();
}
unset($__statamicResultFjqBmJAHyicl7FbqhphBpZbFqeRMyoOWTagContent);

if ($__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->isArray()) {
    $__currentLoopData = $__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->getValue();

    if ($__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValueFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVarsFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW = get_defined_vars();
            $__restoreLoopVariablesFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW = $__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->getDefaultProtectedVariables();
            
            if ($__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->hasScope()) {
                ${$__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->getScopeName()} = $__statamicLoopValueFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW;
            } else {
                $__statamicLoopValueFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValueFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW);
            
                if (is_array($__statamicLoopValueFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValueFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW)) {
                    $__restoreLoopVariablesFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW = array_merge($__restoreLoopVariablesFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW, array_keys($__statamicLoopValueFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW));
                    
                    foreach ($__statamicLoopValueFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?><?php
            
            if ($__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->hasScope()) {
                unset(${$__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariablesFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW as $__key) {
                if (isset($__statamicStachedVarsFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW[$__key])) {
                    $$__key = $__statamicStachedVarsFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVarsFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW,
                $__restoreLoopVariablesFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW,
                $__statamicLoopValueFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->canRenderAsString()) {
    echo $__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->renderString();
}

if ($__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->shouldRenderCompiledContent()):
?><?php
endif;

foreach ($__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->getProtectedVariables() as $__key) {
    if ($__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHostFjqBmJAHyicl7FbqhphBpZbFqeRMyoOW
);
?></a>
    </div>
  </div>

</div>

<div class="my-40 flex flex-col items-center gap-4">
    <div>
    <h2 class="text-center mb-1">Components</h2>
    Beautiful components for a beautiful site.
  </div>
  ##BEGIN-COMPONENT-CLASS##@component('App\View\Components\HomepageGallery', 'homepage-gallery', [])
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\HomepageGallery::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

@endComponentClass##END-COMPONENT-CLASS##
</div>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?>@foreach ($snippets as $snippet)<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
  <div class="my-40 flex flex-col items-center gap-4">
    <div>
      <h2 class="text-5xl text-center mb-1">{{ $snippet->title }}</h2>
      <span>
        {!! $snippet->description !!}
      </span>
    </div>
    @if ($snippet->include_code)
    <div class="flex flex-col lg:flex-row justify-center items-center gap-4 max-w-full">
      {!! $phiki->codeToHtml($snippet->code->value(), Phiki\Grammar\Grammar::Blade, [
          'light' => Phiki\Theme\Theme::Monokai,
          'dark'  => Phiki\Theme\Theme::GithubDark,
      ])->withGutter()->decoration(
          Phiki\Transformers\Decorations\PreDecoration::make()->class('w-max max-w-full'),
      )->decoration(
          Phiki\Transformers\Decorations\GutterDecoration::make()->class('me-1'),
      ) !!}
      ##BEGIN-COMPONENT-CLASS##@component('BladeUI\Icons\Components\Icon', 'icon', ['name' => 'heroicon-o-arrow-long-right'])
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-20 hidden lg:block']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

@endComponentClass##END-COMPONENT-CLASS##
      ##BEGIN-COMPONENT-CLASS##@component('BladeUI\Icons\Components\Icon', 'icon', ['name' => 'heroicon-o-arrow-long-down'])
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\BladeUI\Icons\Components\Icon::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-20 lg:hidden block']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

@endComponentClass##END-COMPONENT-CLASS##
      {!! Blade::render($snippet->code->value()) !!}
    </div>
    @else
      {!! Blade::render($snippet->code->value()) !!}
    @endif
  </div>
<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?>@endforeach<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

<div class="my-40 flex flex-col items-center gap-4">
  <div>
    <h2 class="text-center mb-1">Themes</h2>
    Pick one of the available beautiful themes or create your own.
  </div>
  <div class='w-full grid grid-cols-[max-content_auto] items-start gap-4' x-data="{ id: '', style: '' }">
    <div class="grid grid-rows-10 grid-flow-col gap-x-8 gap-y-4">
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?>@foreach (['daisy' => 'https://daisyui.com/theme-generator', 'flyon' => 'https://flyonui.com/docs/customization/themes'] as $plugin => $url)<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?>@foreach($themes as $theme)<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoop($loop->index); ?><?php endif; ?>
          @if ($theme->plugin == $plugin)
          ##BEGIN-COMPONENT-CLASS##@component('AllYoullNeed\AdvancedControls\View\Components\Indicator', 'indicator', [])
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Indicator::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'justify-self-center flex flex-col items-center gap-1']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

             @slot('indicator', null, ['class' => 'me-2 mt-1']) 
              <?php

$__statamicResultWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FUTagContent = <<<'CONTENTWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU'

CONTENTWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU;

$__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->setContent(base64_decode($__statamicResultWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FUTagContent));
$__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->setTag(
    app(\Statamic\Tags\Loader::class)->load('svg', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['class'=>'size-8','src'=>'/assets/util/'.e($theme->plugin).'']),
        'content' => '',
        'context' => [],
        'tag' => 'svg',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(false)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['class'=>'size-8','src'=>'/assets/util/'.e($theme->plugin).'']));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->render();
}
unset($__statamicResultWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FUTagContent);

if ($__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->isArray()) {
    $__currentLoopData = $__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->getValue();

    if ($__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValueWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVarsWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU = get_defined_vars();
            $__restoreLoopVariablesWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU = $__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->getDefaultProtectedVariables();
            
            if ($__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->hasScope()) {
                ${$__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->getScopeName()} = $__statamicLoopValueWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU;
            } else {
                $__statamicLoopValueWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValueWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU);
            
                if (is_array($__statamicLoopValueWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValueWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU)) {
                    $__restoreLoopVariablesWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU = array_merge($__restoreLoopVariablesWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU, array_keys($__statamicLoopValueWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU));
                    
                    foreach ($__statamicLoopValueWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?><?php
            
            if ($__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->hasScope()) {
                unset(${$__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariablesWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU as $__key) {
                if (isset($__statamicStachedVarsWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU[$__key])) {
                    $$__key = $__statamicStachedVarsWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVarsWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU,
                $__restoreLoopVariablesWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU,
                $__statamicLoopValueWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->canRenderAsString()) {
    echo $__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->renderString();
}

if ($__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->shouldRenderCompiledContent()):
?><?php
endif;

foreach ($__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->getProtectedVariables() as $__key) {
    if ($__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHostWtRcTmbTfX8MuzMUhTHSkhzcYpOT68FU
);
?>
             @endslot
            ##BEGIN-COMPONENT-CLASS##@component('AllYoullNeed\AdvancedControls\View\Components\Button', 'button', [])
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => ''.e(uniqid()).'','class' => 'size-20 p-1 bg-base-200 overflow-hidden',':class' => 'id == $el.id ? \'ring-2 ring-offset-4 ring-primary\' : \'\'','style' => ''.e($theme->variables).'','x-on:click' => 'id = $el.id; style = `'.e($theme->variables).'`']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

              <?php

$__statamicResultOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfhTagContent = <<<'CONTENTOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh'

CONTENTOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh;

$__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->setContent(base64_decode($__statamicResultOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfhTagContent));
$__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->setTag(
    app(\Statamic\Tags\Loader::class)->load('svg', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['class'=>'size-18','src'=>'/assets/controls/hill.svg']),
        'content' => '',
        'context' => [],
        'tag' => 'svg',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(false)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['class'=>'size-18','src'=>'/assets/controls/hill.svg']));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->render();
}
unset($__statamicResultOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfhTagContent);

if ($__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->isArray()) {
    $__currentLoopData = $__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->getValue();

    if ($__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValueOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVarsOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh = get_defined_vars();
            $__restoreLoopVariablesOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh = $__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->getDefaultProtectedVariables();
            
            if ($__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->hasScope()) {
                ${$__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->getScopeName()} = $__statamicLoopValueOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh;
            } else {
                $__statamicLoopValueOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValueOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh);
            
                if (is_array($__statamicLoopValueOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValueOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh)) {
                    $__restoreLoopVariablesOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh = array_merge($__restoreLoopVariablesOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh, array_keys($__statamicLoopValueOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh));
                    
                    foreach ($__statamicLoopValueOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?><?php
            
            if ($__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->hasScope()) {
                unset(${$__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariablesOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh as $__key) {
                if (isset($__statamicStachedVarsOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh[$__key])) {
                    $$__key = $__statamicStachedVarsOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVarsOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh,
                $__restoreLoopVariablesOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh,
                $__statamicLoopValueOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->canRenderAsString()) {
    echo $__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->renderString();
}

if ($__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->shouldRenderCompiledContent()):
?><?php
endif;

foreach ($__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->getProtectedVariables() as $__key) {
    if ($__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHostOlZRlaCsCF6D2qGaA8bBZoZXvnlr4yfh
);
?>
             @endComponentClass##END-COMPONENT-CLASS##
            {{ $theme->name }}
           @endComponentClass##END-COMPONENT-CLASS##
          @endif
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?>@endforeach<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
          <div class="flex flex-col items-center gap-1">
          ##BEGIN-COMPONENT-CLASS##@component('AllYoullNeed\AdvancedControls\View\Components\Button', 'button', ['href' => ''.e($url).''])
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-20 p-1 bg-base-200 overflow-hidden','target' => '_blank']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

            <?php

$__statamicResultCdd66xXhKwoRWbZTf6LlturpWL6EnMGPTagContent = <<<'CONTENTCdd66xXhKwoRWbZTf6LlturpWL6EnMGP'

CONTENTCdd66xXhKwoRWbZTf6LlturpWL6EnMGP;

$__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->setContent(base64_decode($__statamicResultCdd66xXhKwoRWbZTf6LlturpWL6EnMGPTagContent));
$__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->setTag(
    app(\Statamic\Tags\Loader::class)->load('svg', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['class'=>'size-18','src'=>'/assets/util/'.e($plugin).'']),
        'content' => '',
        'context' => [],
        'tag' => 'svg',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(false)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['class'=>'size-18','src'=>'/assets/util/'.e($plugin).'']));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->render();
}
unset($__statamicResultCdd66xXhKwoRWbZTf6LlturpWL6EnMGPTagContent);

if ($__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->isArray()) {
    $__currentLoopData = $__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->getValue();

    if ($__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValueCdd66xXhKwoRWbZTf6LlturpWL6EnMGP) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVarsCdd66xXhKwoRWbZTf6LlturpWL6EnMGP = get_defined_vars();
            $__restoreLoopVariablesCdd66xXhKwoRWbZTf6LlturpWL6EnMGP = $__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->getDefaultProtectedVariables();
            
            if ($__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->hasScope()) {
                ${$__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->getScopeName()} = $__statamicLoopValueCdd66xXhKwoRWbZTf6LlturpWL6EnMGP;
            } else {
                $__statamicLoopValueCdd66xXhKwoRWbZTf6LlturpWL6EnMGP = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValueCdd66xXhKwoRWbZTf6LlturpWL6EnMGP);
            
                if (is_array($__statamicLoopValueCdd66xXhKwoRWbZTf6LlturpWL6EnMGP) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValueCdd66xXhKwoRWbZTf6LlturpWL6EnMGP)) {
                    $__restoreLoopVariablesCdd66xXhKwoRWbZTf6LlturpWL6EnMGP = array_merge($__restoreLoopVariablesCdd66xXhKwoRWbZTf6LlturpWL6EnMGP, array_keys($__statamicLoopValueCdd66xXhKwoRWbZTf6LlturpWL6EnMGP));
                    
                    foreach ($__statamicLoopValueCdd66xXhKwoRWbZTf6LlturpWL6EnMGP as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?><?php
            
            if ($__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->hasScope()) {
                unset(${$__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariablesCdd66xXhKwoRWbZTf6LlturpWL6EnMGP as $__key) {
                if (isset($__statamicStachedVarsCdd66xXhKwoRWbZTf6LlturpWL6EnMGP[$__key])) {
                    $$__key = $__statamicStachedVarsCdd66xXhKwoRWbZTf6LlturpWL6EnMGP[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVarsCdd66xXhKwoRWbZTf6LlturpWL6EnMGP,
                $__restoreLoopVariablesCdd66xXhKwoRWbZTf6LlturpWL6EnMGP,
                $__statamicLoopValueCdd66xXhKwoRWbZTf6LlturpWL6EnMGP
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->canRenderAsString()) {
    echo $__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->renderString();
}

if ($__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->shouldRenderCompiledContent()):
?><?php
endif;

foreach ($__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->getProtectedVariables() as $__key) {
    if ($__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHostCdd66xXhKwoRWbZTf6LlturpWL6EnMGP
);
?>
           @endComponentClass##END-COMPONENT-CLASS##
          More...
        </div>  
      <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?>@endforeach<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
    </div>

    ##BEGIN-COMPONENT-CLASS##@component('AllYoullNeed\AdvancedControls\View\Components\Card', 'card', [])
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\AllYoullNeed\AdvancedControls\View\Components\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '@container preview w-full bg-base-200 transition-colors duration-500','data-theme' => '','x-bind:style' => 'style']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

       @slot('slot', null, ['class' => 'font-normal space-y-4 p-4 [&_:is(div,label,button,textarea)]:[transition:background-color_0ms,border-color_100ms,box-shadow_300ms,border-radius_500ms_ease-out]']) 
        <span class="text-lg text-semibold">Components demo</span>
        ##BEGIN-COMPONENT-CLASS##@component('App\View\Components\StyleDemo', 'style-demo', [])
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\StyleDemo::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

@endComponentClass##END-COMPONENT-CLASS## 
       @endslot
     @endComponentClass##END-COMPONENT-CLASS##
  </div>
</div>
