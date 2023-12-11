<?php

namespace OTS\Core;
use OTS\Core\Session;

class FH
{
    /**
     * @param $label string
     * 
     */
    public static function inputBlock(
        string $label,
        string $id,
        mixed $value,
        array $inputAttrs = [],
        array $wrapperAttrs = [],
        array $errors = []
    ): string {
        $wrapperStr = self::processAttrs($wrapperAttrs);
        $inputAttrs = self::appendErrors($id, $inputAttrs, $errors);
        $inputAttrs = self::processAttrs($inputAttrs);
        $errorMsg = array_key_exists($id, $errors) ? $errors[$id] : "";
        $html = "<div {$wrapperStr}>";
        $html .= "<label for='{$id}'>{$label}</label>";
        $html .= "<input id='{$id}' name='{$id}' value='{$value}' {$inputAttrs} />";
        $html .= "<div class='invalid-feedback'>{$errorMsg}</div></div>";
        return $html;
    }

    public static function selectBlock(
        string $label,
        string $id,
        mixed $value,
        array $options,
        array $inputAttrs = [],
        array $wrapperAttrs = [],
        array $errors = []
    ) {
        $inputAttrs = self::appendErrors($id, $inputAttrs, $errors);
        $inputAttrs = self::processAttrs($inputAttrs);
        $wrapperStr = self::processAttrs($wrapperAttrs);
        $errorMsg = array_key_exists($id, $errors) ? $errors[$id] : "";
        $html = "<div {$wrapperStr}>";
        $html .= "<label for='{$id}'>{$label}</label>";
        $html .= "<select id='{$id}' name='{$id}' {$inputAttrs}>";
        foreach ($options as $val => $display) {
            $selected = $val == $value ? ' selected ' : '';
            $html .= "<option value='{$val}'{$selected}>{$display}</option>";
            }
            $html .= "</select>";
            $html .= "<div class='invalid'>{$errorMsg}</div></div>";
            return $html;
        
    }
    public static function appendErrors($key, $inputAttrs, $errors)
    {
        if (array_key_exists($key, $errors)) {
            if (array_key_exists('class', $inputAttrs)) {
                $inputAttrs['class'] .= ' is-invalid';
            } else {
                $inputAttrs['class'] = 'is-invalid';
            }
        }
        return $inputAttrs;
    }

    public static function A($value, $href, $alt)
    {
        $html = "<a href='{$href}' alt='{$alt}' id=''>{$value}</a>";

        return $html;
    }

    public static function processAttrs(array $attrs): string
    {
        $html = "";
        foreach ($attrs as $key => $value) {
            $html .= " {$key}='{$value}'";
        }
        return $html;
    }

    public static function csrfField(){
        $token = Session::createCsrfToken();
        $html = "<input type='hidden' value='{$token}' name=csrfToken'>";
        return $html;
    }
}
