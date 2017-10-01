<?php
/**
 * Created by PhpStorm.
 * User: Robson
 * Date: 30/09/2017
 * Time: 20:40
 */

echo str_replace('
','','<div id="popup" class=\'modal\' role="dialog" aria-labelledby="Modal title" aria-describedby="Modal description">
    <div class="modal-content">
        <div class="header">
            <a href="#" id="close">
                <div class="box box3">
                    <svg viewbox="0 0 40 40">
                        <path class="close-x" d="M 10,10 L 30,30 M 30,10 L 10,30" />
                    </svg>
                </div>
            </a>
            <h2>{title}</h2>

        </div>
        <div class="copy">
            <p>{content}</p>
        </div>
    </div>
    <a href="#"><div class="overlay"></div></a>
</div>');