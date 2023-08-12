<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="<?php echo e(asset('/favicon.png')); ?>" />
      <link href="https://cdn.jsdelivr.net/npm/daisyui@3.2.1/dist/full.css" rel="stylesheet" type="text/css" />
      <script src="https://cdn.tailwindcss.com"></script>
      <title>E-commerce</title>
    </head>
    <body class="antialiased">

    <div class="navbar bg-base-100">
      <div class="navbar-start">
        <a class="btn btn-ghost normal-case text-xl">E-commerce</a>
      </div>
      <div class="navbar-end">
        <a class="btn" href="<?php echo e(route('produto.create')); ?>">Adicionar produto</a>
      </div>
    </div>
    <div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <th>Produto</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

      <tr>
        <th>
          <label>
            <input type="checkbox" class="checkbox" />
          </label>
        </th>
        <td>
          <div class="flex items-center space-x-3">
            <div class="avatar">
              <div class="mask mask-squircle w-12 h-12">
                <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
              </div>
            </div>
            <div>
              <div class="font-bold"><?php echo e($produto->nome); ?></div>
              <div class="text-sm opacity-50">United States</div>
            </div>
          </div>
        </td>
        <td>
          Zemlak, Daniel and Leannon
          <br/>
          <span class="badge badge-ghost badge-sm">Desktop Support Technician</span>
        </td>
        <td>Purple</td>
        <th>
          <button class="btn btn-ghost btn-xs">Editar</button>
        </th>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
      
    </tbody>
    
  </table>
</div>
    </body>
</html>
<?php /**PATH C:\Users\LENOVO\Desktop\prova\e-commerce\resources\views/index.blade.php ENDPATH**/ ?>