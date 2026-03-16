<script>
    window.cookieStorage = {
        getItem(key) {
            let cookies = document.cookie.split(";");
            for (let i = 0; i < cookies.length; i++) {
                let cookie = cookies[i].split("=");
                if (key == cookie[0].trim())
                    return decodeURIComponent(cookie[1]);
            }
            return null;
        },
        setItem(key, value) {
            var nodes = document.querySelectorAll('link[rel=stylesheet][data-navigate-track=reload]');
            var first = nodes[0]; var last = nodes[nodes.length- 1];
            if (value.includes('daisy')) {
                first.disabled = false;
                last.disabled = true;
            }
            else {
                last.disabled = false;
                first.disabled = true;
            }
            document.cookie = key + ' = ' + encodeURIComponent(value) + ';path=/;Max-Age=365;'
        }
    }
</script>
<div
    x-data="{ twplugin: $persist('daisy').using(cookieStorage) }"
    x-cloak
    @click="twplugin = (twplugin === 'daisy' ? 'flyon' : 'daisy')"
    <?php echo e($attributes->class(["tooltip-toggle relative cursor-pointer"])->merge()); ?>

>
    <?php

$__statamicResult5x1prNBamKCGCGOhr48ykjzCr5mqalrHTagContent = <<<'CONTENT5x1prNBamKCGCGOhr48ykjzCr5mqalrH'

CONTENT5x1prNBamKCGCGOhr48ykjzCr5mqalrH;

$__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->setContent(base64_decode($__statamicResult5x1prNBamKCGCGOhr48ykjzCr5mqalrHTagContent));
$__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->setTag(
    app(\Statamic\Tags\Loader::class)->load('svg', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/flyon.svg','class'=>'absolute index-0 duration-250','attr::style'=>'twplugin.includes(&apos;flyon&apos;) ? &apos;z-index:1&apos; : &apos;transform: scale(50%) translate(75%,75%)&apos;']),
        'content' => '',
        'context' => [],
        'tag' => 'svg',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(false)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/flyon.svg','class'=>'absolute index-0 duration-250','attr::style'=>'twplugin.includes(&apos;flyon&apos;) ? &apos;z-index:1&apos; : &apos;transform: scale(50%) translate(75%,75%)&apos;']));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->render();
}
unset($__statamicResult5x1prNBamKCGCGOhr48ykjzCr5mqalrHTagContent);

if ($__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->isArray()) {
    $__currentLoopData = $__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->getValue();

    if ($__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValue5x1prNBamKCGCGOhr48ykjzCr5mqalrH) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVars5x1prNBamKCGCGOhr48ykjzCr5mqalrH = get_defined_vars();
            $__restoreLoopVariables5x1prNBamKCGCGOhr48ykjzCr5mqalrH = $__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->getDefaultProtectedVariables();
            
            if ($__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->hasScope()) {
                ${$__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->getScopeName()} = $__statamicLoopValue5x1prNBamKCGCGOhr48ykjzCr5mqalrH;
            } else {
                $__statamicLoopValue5x1prNBamKCGCGOhr48ykjzCr5mqalrH = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValue5x1prNBamKCGCGOhr48ykjzCr5mqalrH);
            
                if (is_array($__statamicLoopValue5x1prNBamKCGCGOhr48ykjzCr5mqalrH) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValue5x1prNBamKCGCGOhr48ykjzCr5mqalrH)) {
                    $__restoreLoopVariables5x1prNBamKCGCGOhr48ykjzCr5mqalrH = array_merge($__restoreLoopVariables5x1prNBamKCGCGOhr48ykjzCr5mqalrH, array_keys($__statamicLoopValue5x1prNBamKCGCGOhr48ykjzCr5mqalrH));
                    
                    foreach ($__statamicLoopValue5x1prNBamKCGCGOhr48ykjzCr5mqalrH as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?><?php
            
            if ($__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->hasScope()) {
                unset(${$__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariables5x1prNBamKCGCGOhr48ykjzCr5mqalrH as $__key) {
                if (isset($__statamicStachedVars5x1prNBamKCGCGOhr48ykjzCr5mqalrH[$__key])) {
                    $$__key = $__statamicStachedVars5x1prNBamKCGCGOhr48ykjzCr5mqalrH[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVars5x1prNBamKCGCGOhr48ykjzCr5mqalrH,
                $__restoreLoopVariables5x1prNBamKCGCGOhr48ykjzCr5mqalrH,
                $__statamicLoopValue5x1prNBamKCGCGOhr48ykjzCr5mqalrH
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->canRenderAsString()) {
    echo $__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->renderString();
}

if ($__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->shouldRenderCompiledContent()):
?><?php
endif;

foreach ($__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->getProtectedVariables() as $__key) {
    if ($__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHost5x1prNBamKCGCGOhr48ykjzCr5mqalrH
);
?>
    <?php

$__statamicResultVntriURnDdP9a4IIvSa4oU4gk4xVfvgCTagContent = <<<'CONTENTVntriURnDdP9a4IIvSa4oU4gk4xVfvgC'

CONTENTVntriURnDdP9a4IIvSa4oU4gk4xVfvgC;

$__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC = new \Statamic\View\Blade\BladeTagHost(get_defined_vars());
$__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->setContent(base64_decode($__statamicResultVntriURnDdP9a4IIvSa4oU4gk4xVfvgCTagContent));
$__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->setTag(
    app(\Statamic\Tags\Loader::class)->load('svg', [
        'parser' => null,
        'params' => \Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/daisy.svg','class'=>'absolute index-0 duration-250','attr::style'=>'twplugin.includes(&apos;daisy&apos;) ? &apos;z-index:1&apos; : &apos;transform: scale(50%) translate(75%,75%)&apos;']),
        'content' => '',
        'context' => [],
        'tag' => 'svg',
        'tag_method' => 'index',
    ]),
    'index'
)->setIsPair(false)->setParams(\Statamic\View\Blade\BladeTagHost::filterParams(['src'=>'/assets/util/daisy.svg','class'=>'absolute index-0 duration-250','attr::style'=>'twplugin.includes(&apos;daisy&apos;) ? &apos;z-index:1&apos; : &apos;transform: scale(50%) translate(75%,75%)&apos;']));

/** Allows for navs to override values for recursive children. */
if (isset($__statamicOverrideTagResultValue)) {
   $__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->setValue($__statamicOverrideTagResultValue);
   unset($__statamicOverrideTagResultValue);
} else {
    $__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->render();
}
unset($__statamicResultVntriURnDdP9a4IIvSa4oU4gk4xVfvgCTagContent);

if ($__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->isAssociativeArray()) {
    /** Create variables from the array values. */
    foreach ($__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->getValue() as $__key => $__value) {
        $$__key = $__value;
    }
    unset($__value);
} elseif ($__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->isArray()) {
    $__currentLoopData = $__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->getValue();

    if ($__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->isEmpty()) {
    ?><?php } else {
        $__env->addLoop($__currentLoopData);

        /** Iterate the tag's results */
        foreach ($__currentLoopData as $__statamicLoopValueVntriURnDdP9a4IIvSa4oU4gk4xVfvgC) {
            $__env->incrementLoopIndices();
            /** Make $loop variable available to the user. */
            $loop = $__env->getLastLoop();
            /** Make a copy of the variables we want to restore. */
            $__statamicStachedVarsVntriURnDdP9a4IIvSa4oU4gk4xVfvgC = get_defined_vars();
            $__restoreLoopVariablesVntriURnDdP9a4IIvSa4oU4gk4xVfvgC = $__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->getDefaultProtectedVariables();
            
            if ($__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->hasScope()) {
                ${$__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->getScopeName()} = $__statamicLoopValueVntriURnDdP9a4IIvSa4oU4gk4xVfvgC;
            } else {
                $__statamicLoopValueVntriURnDdP9a4IIvSa4oU4gk4xVfvgC = \Statamic\View\Blade\BladeTagHost::adjustBladeValue($__statamicLoopValueVntriURnDdP9a4IIvSa4oU4gk4xVfvgC);
            
                if (is_array($__statamicLoopValueVntriURnDdP9a4IIvSa4oU4gk4xVfvgC) && \Illuminate\Support\Arr::isAssoc($__statamicLoopValueVntriURnDdP9a4IIvSa4oU4gk4xVfvgC)) {
                    $__restoreLoopVariablesVntriURnDdP9a4IIvSa4oU4gk4xVfvgC = array_merge($__restoreLoopVariablesVntriURnDdP9a4IIvSa4oU4gk4xVfvgC, array_keys($__statamicLoopValueVntriURnDdP9a4IIvSa4oU4gk4xVfvgC));
                    
                    foreach ($__statamicLoopValueVntriURnDdP9a4IIvSa4oU4gk4xVfvgC as $__key => $__value) {
                        $$__key = $__value;
                    }
                    unset($__value);
                }
            }
            
            /** The inner compiled content. */
            ?><?php
            
            if ($__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->hasScope()) {
                unset(${$__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->getScopeName()});
            }
            
            /** Restore variables that may have been overwritten. */
            foreach ($__restoreLoopVariablesVntriURnDdP9a4IIvSa4oU4gk4xVfvgC as $__key) {
                if (isset($__statamicStachedVarsVntriURnDdP9a4IIvSa4oU4gk4xVfvgC[$__key])) {
                    $$__key = $__statamicStachedVarsVntriURnDdP9a4IIvSa4oU4gk4xVfvgC[$__key];
                } else {
                    unset($__key);
                }
            }
            
            /** Cleanup loop values. */
            unset(
                $__value,
                $__key,
                $__statamicStachedVarsVntriURnDdP9a4IIvSa4oU4gk4xVfvgC,
                $__restoreLoopVariablesVntriURnDdP9a4IIvSa4oU4gk4xVfvgC,
                $__statamicLoopValueVntriURnDdP9a4IIvSa4oU4gk4xVfvgC
            );
        }
    
        $__env->popLoop();
        $loop = $__env->getLastLoop();
    }
} elseif ($__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->canRenderAsString()) {
    echo $__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->renderString();
}

if ($__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->shouldRenderCompiledContent()):
?><?php
endif;

foreach ($__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->getProtectedVariables() as $__key) {
    if ($__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->hasProtectedVar($__key)) {
        $$__key = $__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC->getProtectedVar($__key);    
    } else {
        unset($__key);
    }
}

unset(
    $__key,
    $__statamicBladeHostVntriURnDdP9a4IIvSa4oU4gk4xVfvgC
);
?>
</div><?php /**PATH /var/www/allyouneed.local/resources/views/components/style-picker.blade.php ENDPATH**/ ?>