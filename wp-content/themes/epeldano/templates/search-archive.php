<div class="search-archive">
  <?php get_search_form() ?>
  <div class="style-select">
    <select onchange="document.location.href=this.options[this.selectedIndex].value;">
      <option value=""><?= esc_attr__('Selecciona un mes'); ?></option>
      <?php wp_get_archives(['format' => 'option']) ?>
    </select>
  </div>
</div>
