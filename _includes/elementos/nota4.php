<div class="col-lg-4 mb-3 d-flex align-items-stretch">
    <div class="card">
        <a href="<?= htmlspecialchars($nota['url'], ENT_QUOTES, 'UTF-8'); ?>" 
           <?php echo isset($nota['target']) ? 'target="' . $nota['target'] . '"' : ''; ?>>
            <img src="<?= htmlspecialchars($nota['foto'], ENT_QUOTES, 'UTF-8'); ?>" class="card-img-top" alt="<?= $nota_txt_encode; ?>">
        </a>
        <div class="card-body d-flex flex-column">
            <a href="<?= htmlspecialchars($nota['url'], ENT_QUOTES, 'UTF-8'); ?>" class="enlaceTxt" 
               <?php echo isset($nota['target']) ? 'target="' . $nota['target'] . '"' : ''; ?>>
                <h5 class="card-title"><?= $nota["txt"]; ?></h5>
            </a>
        </div>
    </div>
</div>