<?php
    $attributes = array();
    $attributes[ 'type' ] = 'tel';
    $attributes[ 'value' ] = $value;
    $attributes = PodsForm::merge_attributes( $attributes, $name, PodsForm::$type, $options );
?>
<input<?php PodsForm::attributes( $attributes, $name, $type, $options ); ?> />
<?php
    PodsForm::regex( $options );