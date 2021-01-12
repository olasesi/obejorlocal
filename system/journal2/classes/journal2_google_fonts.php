<?php

class Journal2GoogleFonts {

    private $fonts = array();

    public function add($font_name, $font_subset, $font_weight) {
        if (!$font_name) return;
        if (!isset($this->fonts[md5($font_name)])) {
            $this->fonts[md5($font_name)] = array(
                'name'      => $font_name,
                'subset'    => array(),
                'weight'    => array()
            );
        }
        if (is_array($font_subset)) {
            foreach ($font_subset as $subset) {
                $this->fonts[md5($font_name)]['subset'][md5($subset)] = $subset;
            }
        } elseif ($font_subset) {
            $this->fonts[md5($font_name)]['subset'][md5($font_subset)] = $font_subset;
        }
        $this->fonts[md5($font_name)]['weight'][md5($font_weight)] = $font_weight;
    }

    public function getFonts() {
        if (!$this->fonts) {
            return array();
        }
        $fonts = array();
        $subsets = array();
        foreach ($this->fonts as $font) {
            $family = str_replace(' ', '+', $font['name']);
            $weight = $font['weight'] ? ':' . implode(',', $font['weight']) : '';
            $subsets = array_merge($subsets, $font['subset']);
            $fonts[] = "{$family}{$weight}";
        }
        if (!empty($subsets)) {
            $subsets = '&amp;subset=' . implode(',', $subsets);
        }
        return array(
            "//fonts.googleapis.com/css?family=" . implode('%7C', $fonts) . $subsets
        );
    }

    public function getAllFonts() {
        return $this->fonts;
    }

    public function setAllFonts($fonts) {
        $this->fonts = array_merge($this->fonts, $fonts);
    }
}