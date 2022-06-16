<?php 
/**
 * Template Name: go
 */
get_header(); ?>

<?php
global $BORN_FRAMEWORK;
$lang_code = born_get_current_language_code();
wp_reset_query();

?>



    <div id="lottie-test"></div>
    <div class="redirect-page-content">
        <div class="redirect-page--inner">
        <div class="logo">
                 <?php if ($BORN_FRAMEWORK->Options->Get('go_logo')):?>
                <?php echo wp_get_attachment_image($BORN_FRAMEWORK->Options->Get('go_logo')['id'], ''); ?>
                <?php endif;?>
            </div>
            <?php
                    if( $referer = wp_get_raw_referer() ) {
                        $massstring = explode('/', $referer); 
                        if(in_array('ru', $massstring)) { ?>

                            <p class="h2"><?php echo $BORN_FRAMEWORK->Options->Get('go_title' . 'ru');?></p>
                            <span class="divider"><span></span></span>
                            <p><?php echo $BORN_FRAMEWORK->Options->Get('go_text' . 'ru');?> <img src="<?php echo get_home_url();?>/wp-content/themes/aff-child/assets/img/sec.svg" alt=""> <?php echo $BORN_FRAMEWORK->Options->Get('go_seconds' . 'ru');?></p>
                            <a class="button" onclick="redirectTo();"><?php echo $BORN_FRAMEWORK->Options->Get('go_button' . 'ru');?></a>

                      <?php  
                        } else { ?>
                            <p class="h2"><?php echo $BORN_FRAMEWORK->Options->Get('go_title' . 'lv');?></p>
                            <span class="divider"><span></span></span>
                            <p><?php echo $BORN_FRAMEWORK->Options->Get('go_text' . 'lv');?> <img src="<?php echo get_home_url();?>/wp-content/themes/aff-child/assets/img/sec.svg" alt=""> <?php echo $BORN_FRAMEWORK->Options->Get('go_seconds' . 'lv');?></p>
                            <a class="button" onclick="redirectTo();"><?php echo $BORN_FRAMEWORK->Options->Get('go_button' . 'lv');?></a>
                            <?php   }
                    }
                ?>
        </div>
    </div>
    <style>
            .page-template-page-go  {
            box-shadow: none;
            position: relative;
            height: 100vh;
            background: #f8f1e5;
        }

        #lottie-test {
			position: absolute;
			bottom: -4px;
			width: 100%;    
			z-index: 1;
		}

		.redirect-page-content {
			text-align: center;
			height: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.redirect-page--inner {
			background: #fff;
			width: 800px;
			padding: 40px 80px;     
			position: relative;
    		z-index: 2;
		}

		.redirect-page--inner p {
			font-family: FuturaPT,sans-serif;   
			font-size:20px;    margin: 0 0 20px;
		}

		.redirect-page--inner p.h2 {
			font-size: 28px;
    padding: 0 50px;
    margin-top: 15px;
    margin-bottom: 20px;
    line-height: 1.3;
		}

		.redirect-page--inner .divider {
			width:100%;    margin-bottom: 20px;
			display: block;
			height: 6px;
            background: rgb(231 167 55 / 27%);
            overflow:hidden;
            
		}

        .redirect-page--inner .divider span {
            background: linear-gradient(90deg, #F3A607 0%, #FFC56D 100%);
            animation-name: fill ;
            animation-duration: 3s;
            animation-iteration-count: 1;
            display: block;
            height: 6px;
            width:100%;
          
        }


        @keyframes fill{
            0%    { transform: translateX(-100%); }
           
            100%  { transform: translateX(0); }
            }

		.redirect-page--inner .button {
			background: #e7a736;
			color: #fff;
			font-size: 20px;
			line-height: 1.564rem;
			padding: 14px 21px ;
			text-align: center;
			display: inline-block;
			text-decoration:none;
			font-family: FuturaPT,sans-serif;   
			margin-top: 20px;
			transition: background 0.3s ease-in-out;
		}

		.redirect-page--inner .button:hover {
			background: #dd9933;
		}

		.redirect-page--inner p img {
			vertical-align:middle;
		}
        .redirect-page--inner .logo {
            text-align: center;
        }

		@media only screen and (max-width: 1024px) {

			.redirect-page--inner {
				width: 70%;
				padding: 40px 70px;
			}		

			.redirect-page--inner p.h2 {
				font-size: 25px;
				padding: 0 25px;    
                line-height: 1.2;
			}

		}

		@media only screen and (max-width: 767px) {

            .redirect-page--inner {
                width: 95%;
                padding: 20px 30px;
            }
            .redirect-page--inner p {
                padding: 0 25px;
            }
            .redirect-page--inner .logo img {
                max-width:50%;
            }
		}


    </style>


 <!-- animation -->
    <script src="<?php echo get_home_url();?>/wp-content/themes/aff-child/assets/js/lottie.min.js"></script>
    <script>
        var animationData = {
            "v": "5.6.5",
            "fr": 60,
            "ip": 0,
            "op": 300,
            "w": 1440,
            "h": 1024,
            "nm": "Desktop HD",
            "ddd": 0,
            "assets": [{
                "id": "comp_0",
                "layers": [{
                    "ddd": 0,
                    "ind": 1,
                    "ty": 4,
                    "nm": "highlight",
                    "sr": 1,
                    "ks": {
                        "o": {
                            "a": 0,
                            "k": 100,
                            "ix": 11
                        },
                        "r": {
                            "a": 0,
                            "k": 0,
                            "ix": 10
                        },
                        "p": {
                            "a": 0,
                            "k": [986.5, 233.5, 0],
                            "ix": 2
                        },
                        "a": {
                            "a": 0,
                            "k": [426, 194, 0],
                            "ix": 1
                        },
                        "s": {
                            "a": 0,
                            "k": [100, 100, 100],
                            "ix": 6
                        }
                    },
                    "ao": 0,
                    "shapes": [{
                        "ty": "gr",
                        "it": [{
                            "ind": 0,
                            "ty": "sh",
                            "ix": 1,
                            "ks": {
                                "a": 0,
                                "k": {
                                    "i": [
                                        [83.762, 0],
                                        [33.138, -0.776],
                                        [0, 0],
                                        [-1.031, 0],
                                        [-72.232, 12.439],
                                        [0, 0]
                                    ],
                                    "o": [
                                        [-35.699, 0],
                                        [0, 0],
                                        [1.029, 0.001],
                                        [161.517, 0],
                                        [0, 0],
                                        [-65.872, -3.921]
                                    ],
                                    "v": [
                                        [-721.868, -80],
                                        [-825.376, -78.811],
                                        [-724.956, -0.002],
                                        [-721.868, 0],
                                        [-347.6, -20.88],
                                        [-494.124, -73.809]
                                    ],
                                    "c": true
                                },
                                "ix": 2
                            },
                            "nm": "Path 1",
                            "mn": "ADBE Vector Shape - Group",
                            "hd": false
                        }, {
                            "ty": "gr",
                            "it": [{
                                "ty": "tr",
                                "p": {
                                    "a": 0,
                                    "k": [0, 0],
                                    "ix": 2
                                },
                                "a": {
                                    "a": 0,
                                    "k": [0, 0],
                                    "ix": 1
                                },
                                "s": {
                                    "a": 0,
                                    "k": [100, 100],
                                    "ix": 3
                                },
                                "r": {
                                    "a": 0,
                                    "k": 0,
                                    "ix": 6
                                },
                                "o": {
                                    "a": 0,
                                    "k": 100,
                                    "ix": 7
                                },
                                "sk": {
                                    "a": 0,
                                    "k": 0,
                                    "ix": 4
                                },
                                "sa": {
                                    "a": 0,
                                    "k": 0,
                                    "ix": 5
                                },
                                "nm": "Transform"
                            }],
                            "nm": "Group 1",
                            "np": 0,
                            "cix": 2,
                            "bm": 0,
                            "ix": 2,
                            "mn": "ADBE Vector Group",
                            "hd": false
                        }, {
                            "ty": "fl",
                            "c": {
                                "a": 0,
                                "k": [1, 0.86274510622, 0.61960786581, 1],
                                "ix": 4
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 5
                            },
                            "r": 1,
                            "bm": 0,
                            "nm": "Fill 1",
                            "mn": "ADBE Vector Graphic - Fill",
                            "hd": false
                        }, {
                            "ty": "tr",
                            "p": {
                                "a": 0,
                                "k": [586.488, 40],
                                "ix": 2
                            },
                            "a": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 1
                            },
                            "s": {
                                "a": 0,
                                "k": [100, 100],
                                "ix": 3
                            },
                            "r": {
                                "a": 0,
                                "k": 0,
                                "ix": 6
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 7
                            },
                            "sk": {
                                "a": 0,
                                "k": 0,
                                "ix": 4
                            },
                            "sa": {
                                "a": 0,
                                "k": 0,
                                "ix": 5
                            },
                            "nm": "Transform"
                        }],
                        "nm": "Group 1",
                        "np": 3,
                        "cix": 2,
                        "bm": 0,
                        "ix": 1,
                        "mn": "ADBE Vector Group",
                        "hd": false
                    }],
                    "ip": 0,
                    "op": 3603.6036036036,
                    "st": 0,
                    "bm": 0
                }, {
                    "ddd": 0,
                    "ind": 2,
                    "ty": 4,
                    "nm": "coin",
                    "sr": 1,
                    "ks": {
                        "o": {
                            "a": 0,
                            "k": 100,
                            "ix": 11
                        },
                        "r": {
                            "a": 0,
                            "k": 0,
                            "ix": 10
                        },
                        "p": {
                            "a": 0,
                            "k": [426, 194, 0],
                            "ix": 2
                        },
                        "a": {
                            "a": 0,
                            "k": [426, 194, 0],
                            "ix": 1
                        },
                        "s": {
                            "a": 0,
                            "k": [100, 100, 100],
                            "ix": 6
                        }
                    },
                    "ao": 0,
                    "shapes": [{
                        "ty": "gr",
                        "it": [{
                            "ind": 0,
                            "ty": "sh",
                            "ix": 1,
                            "ks": {
                                "a": 0,
                                "k": {
                                    "i": [
                                        [0, -22.091],
                                        [235.273, 0],
                                        [0, 22.091],
                                        [-235.273, 0]
                                    ],
                                    "o": [
                                        [0, 22.091],
                                        [-235.273, 0],
                                        [0, -22.091],
                                        [235.273, 0]
                                    ],
                                    "v": [
                                        [426, 0],
                                        [0, 40],
                                        [-426, 0],
                                        [0, -40]
                                    ],
                                    "c": true
                                },
                                "ix": 2
                            },
                            "nm": "Path 1",
                            "mn": "ADBE Vector Shape - Group",
                            "hd": false
                        }, {
                            "ty": "fl",
                            "c": {
                                "a": 0,
                                "k": [1, 0.779999976065, 0.39199999641, 1],
                                "ix": 4
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 5
                            },
                            "r": 1,
                            "bm": 0,
                            "nm": "Fill 1",
                            "mn": "ADBE Vector Graphic - Fill",
                            "hd": false
                        }, {
                            "ty": "tr",
                            "p": {
                                "a": 0,
                                "k": [426, 40],
                                "ix": 2
                            },
                            "a": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 1
                            },
                            "s": {
                                "a": 0,
                                "k": [100, 100],
                                "ix": 3
                            },
                            "r": {
                                "a": 0,
                                "k": 0,
                                "ix": 6
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 7
                            },
                            "sk": {
                                "a": 0,
                                "k": 0,
                                "ix": 4
                            },
                            "sa": {
                                "a": 0,
                                "k": 0,
                                "ix": 5
                            },
                            "nm": "Transform"
                        }],
                        "nm": "Group 2",
                        "np": 4,
                        "cix": 2,
                        "bm": 0,
                        "ix": 1,
                        "mn": "ADBE Vector Group",
                        "hd": false
                    }, {
                        "ty": "gr",
                        "it": [{
                            "ind": 0,
                            "ty": "sh",
                            "ix": 1,
                            "ks": {
                                "a": 0,
                                "k": {
                                    "i": [
                                        [0, 0],
                                        [0, 0],
                                        [-122.169, 0],
                                        [0, 22.091],
                                        [0, 0]
                                    ],
                                    "o": [
                                        [0, 0],
                                        [77.679, 7.736],
                                        [235.273, 0],
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "v": [
                                        [-368, -76.729],
                                        [-368, 64.706],
                                        [-58, 77.271],
                                        [368, 37.271],
                                        [368, -76.729]
                                    ],
                                    "c": true
                                },
                                "ix": 2
                            },
                            "nm": "Path 1",
                            "mn": "ADBE Vector Shape - Group",
                            "hd": false
                        }, {
                            "ty": "fl",
                            "c": {
                                "a": 0,
                                "k": [0.882000014361, 0.685999971278, 0.361000001197,
                                    1
                                ],
                                "ix": 4
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 5
                            },
                            "r": 1,
                            "bm": 0,
                            "nm": "Fill 1",
                            "mn": "ADBE Vector Graphic - Fill",
                            "hd": false
                        }, {
                            "ty": "tr",
                            "p": {
                                "a": 0,
                                "k": [484, 116.73],
                                "ix": 2
                            },
                            "a": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 1
                            },
                            "s": {
                                "a": 0,
                                "k": [100, 100],
                                "ix": 3
                            },
                            "r": {
                                "a": 0,
                                "k": 0,
                                "ix": 6
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 7
                            },
                            "sk": {
                                "a": 0,
                                "k": 0,
                                "ix": 4
                            },
                            "sa": {
                                "a": 0,
                                "k": 0,
                                "ix": 5
                            },
                            "nm": "Transform"
                        }],
                        "nm": "Group 3",
                        "np": 4,
                        "cix": 2,
                        "bm": 0,
                        "ix": 2,
                        "mn": "ADBE Vector Group",
                        "hd": false
                    }, {
                        "ty": "gr",
                        "it": [{
                            "ind": 0,
                            "ty": "sh",
                            "ix": 1,
                            "ks": {
                                "a": 0,
                                "k": {
                                    "i": [
                                        [0, 0],
                                        [0, 0],
                                        [-71.916, -7.162],
                                        [0, 0]
                                    ],
                                    "o": [
                                        [0, 0],
                                        [0, 10.62],
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "v": [
                                        [-58, -70.717],
                                        [-58, 43.283],
                                        [58, 70.717],
                                        [58, -70.717]
                                    ],
                                    "c": true
                                },
                                "ix": 2
                            },
                            "nm": "Path 1",
                            "mn": "ADBE Vector Shape - Group",
                            "hd": false
                        }, {
                            "ty": "fl",
                            "c": {
                                "a": 0,
                                "k": [0.827000038297, 0.626999978458, 0.328999986836,
                                    1
                                ],
                                "ix": 4
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 5
                            },
                            "r": 1,
                            "bm": 0,
                            "nm": "Fill 1",
                            "mn": "ADBE Vector Graphic - Fill",
                            "hd": false
                        }, {
                            "ty": "tr",
                            "p": {
                                "a": 0,
                                "k": [58, 110.718],
                                "ix": 2
                            },
                            "a": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 1
                            },
                            "s": {
                                "a": 0,
                                "k": [100, 100],
                                "ix": 3
                            },
                            "r": {
                                "a": 0,
                                "k": 0,
                                "ix": 6
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 7
                            },
                            "sk": {
                                "a": 0,
                                "k": 0,
                                "ix": 4
                            },
                            "sa": {
                                "a": 0,
                                "k": 0,
                                "ix": 5
                            },
                            "nm": "Transform"
                        }],
                        "nm": "Group 4",
                        "np": 4,
                        "cix": 2,
                        "bm": 0,
                        "ix": 3,
                        "mn": "ADBE Vector Group",
                        "hd": false
                    }],
                    "ip": 0,
                    "op": 3603.6036036036,
                    "st": 0,
                    "bm": 0
                }]
            }],
            "layers": [{
                "ddd": 0,
                "ind": 1,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.104,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.106,
                            "s": [-2.033]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.108,
                            "s": [-2.02]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.109,
                            "s": [-1.879]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.111,
                            "s": [-1.599]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.113,
                            "s": [-1.352]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.115,
                            "s": [-1.196]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.117,
                            "s": [-1.107]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.119,
                            "s": [-1.087]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.121,
                            "s": [-1.134]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.125,
                            "s": [-1.077]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.127,
                            "s": [1.781]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 154.129,
                            "s": [1.805]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 156,
                            "s": [0.399]
                        }, {
                            "t": 158.000097754004,
                            "s": [-0.9]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26,
                            "s": [1362.398, -671.361, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.002,
                            "s": [1362.398, -670.619, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.004,
                            "s": [1362.398, -668.763, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.006,
                            "s": [1362.398, -665.795, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.008,
                            "s": [1362.398, -661.712, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.01,
                            "s": [1362.398, -656.517, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.012,
                            "s": [1362.398, -650.208, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.014,
                            "s": [1362.398, -642.786, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.016,
                            "s": [1362.398, -634.25, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.018,
                            "s": [1362.398, -624.601, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.02,
                            "s": [1362.398, -613.839, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.022,
                            "s": [1362.398, -601.963, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.024,
                            "s": [1362.398, -588.974, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.025,
                            "s": [1362.398, -574.872, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.027,
                            "s": [1362.398, -559.657, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.029,
                            "s": [1362.398, -543.328, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.031,
                            "s": [1362.398, -525.885, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.033,
                            "s": [1362.398, -507.33, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.035,
                            "s": [1362.398, -487.661, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.037,
                            "s": [1362.398, -466.879, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.039,
                            "s": [1362.398, -444.983, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.041,
                            "s": [1362.398, -421.974, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.045,
                            "s": [1362.398, -397.852, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.047,
                            "s": [1362.398, -372.616, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.049,
                            "s": [1362.398, -346.267, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.051,
                            "s": [1362.398, -318.805, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.053,
                            "s": [1362.398, -290.229, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.055,
                            "s": [1362.398, -260.54, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.057,
                            "s": [1362.398, -229.738, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.059,
                            "s": [1362.398, -197.822, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.061,
                            "s": [1362.398, -164.793, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.063,
                            "s": [1362.398, -130.651, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.065,
                            "s": [1362.398, -95.396, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.067,
                            "s": [1362.398, -59.027, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.068,
                            "s": [1362.398, -21.544, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.07,
                            "s": [1362.398, 17.051, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.072,
                            "s": [1362.398, 56.76, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.074,
                            "s": [1362.398, 97.583, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.076,
                            "s": [1362.398, 139.518, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.078,
                            "s": [1362.398, 182.567, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.08,
                            "s": [1362.398, 226.73, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.082,
                            "s": [1362.398, 272.005, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.084,
                            "s": [1362.398, 318.394, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.086,
                            "s": [1362.398, 365.897, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.088,
                            "s": [1362.398, 414.512, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.09,
                            "s": [1362.398, 464.241, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.092,
                            "s": [1362.398, 515.084, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.094,
                            "s": [1362.398, 567.039, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.096,
                            "s": [1362.398, 620.108, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.098,
                            "s": [1362.398, 674.291, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.1,
                            "s": [1362.398, 729.587, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.102,
                            "s": [1362.398, 785.996, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.104,
                            "s": [1362.398, 843.518, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.106,
                            "s": [1361.45, 851.177, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.108,
                            "s": [1360.215, 844.756, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.109,
                            "s": [1359.084, 840.087, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.111,
                            "s": [1357.941, 836.13, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.113,
                            "s": [1356.803, 833.39, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.115,
                            "s": [1355.675, 832.083, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.117,
                            "s": [1354.809, 831.912, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 146.119,
                            "s": [1354.341, 831.345, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.121,
                            "s": [1353.607, 831.32, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.125,
                            "s": [1353.728, 831.977, 0],
                            "to": [0, 0, 0],
                            "ti": [-2.139, -0.555, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.127,
                            "s": [1354.74, 838.714, 0],
                            "to": [2.282, 0.592, 0],
                            "ti": [-2.016, 1.844, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 154.129,
                            "s": [1358.796, 833.656, 0],
                            "to": [2.016, -1.844, 0],
                            "ti": [-1.522, -0.58, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 156,
                            "s": [1364.234, 834.469, 0],
                            "to": [2.188, 0.833, 0],
                            "ti": [-1.204, -0.406, 0]
                        }, {
                            "t": 158.000097754004,
                            "s": [1369.859, 836.656, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 30.004004004004,
                "op": 3633.60760760761,
                "st": 30.004004004004,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 2,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.1,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.102,
                            "s": [-4.672]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.104,
                            "s": [-3.42]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.106,
                            "s": [-2.106]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.108,
                            "s": [-2.021]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.11,
                            "s": [-1.875]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.112,
                            "s": [-1.594]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.113,
                            "s": [-1.348]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.115,
                            "s": [-1.193]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.117,
                            "s": [-1.118]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.119,
                            "s": [-1.086]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.121,
                            "s": [-1.133]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.123,
                            "s": [-1.076]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.125,
                            "s": [1.682]
                        }, {
                            "t": 154.129101758008,
                            "s": [1.474]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26,
                            "s": [1300.943, -520.184, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.002,
                            "s": [1300.943, -519.441, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.004,
                            "s": [1300.943, -517.586, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.006,
                            "s": [1300.943, -514.617, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.008,
                            "s": [1300.943, -510.535, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.01,
                            "s": [1300.943, -505.339, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.012,
                            "s": [1300.943, -499.03, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.014,
                            "s": [1300.943, -491.608, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.016,
                            "s": [1300.943, -483.072, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.018,
                            "s": [1300.943, -473.423, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.02,
                            "s": [1300.943, -462.661, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.022,
                            "s": [1300.943, -450.786, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.024,
                            "s": [1300.943, -437.797, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.026,
                            "s": [1300.943, -423.694, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.028,
                            "s": [1300.943, -408.479, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.029,
                            "s": [1300.943, -392.15, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.031,
                            "s": [1300.943, -374.708, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.033,
                            "s": [1300.943, -356.152, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.035,
                            "s": [1300.943, -336.483, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.037,
                            "s": [1300.943, -315.701, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.039,
                            "s": [1300.943, -293.805, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.041,
                            "s": [1300.943, -270.796, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.043,
                            "s": [1300.943, -246.674, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.045,
                            "s": [1300.943, -221.438, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.049,
                            "s": [1300.943, -195.089, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.051,
                            "s": [1300.943, -167.627, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.053,
                            "s": [1300.943, -139.051, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.055,
                            "s": [1300.943, -109.362, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.057,
                            "s": [1300.943, -78.56, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.059,
                            "s": [1300.943, -46.645, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.061,
                            "s": [1300.943, -13.616, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.063,
                            "s": [1300.943, 20.527, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.065,
                            "s": [1300.943, 55.782, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.067,
                            "s": [1300.943, 92.151, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.069,
                            "s": [1300.943, 129.634, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.071,
                            "s": [1300.943, 168.229, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.072,
                            "s": [1300.943, 207.938, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.074,
                            "s": [1300.943, 248.761, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.076,
                            "s": [1300.943, 290.696, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.078,
                            "s": [1300.943, 333.745, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.08,
                            "s": [1300.943, 377.908, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.082,
                            "s": [1300.943, 423.183, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.084,
                            "s": [1300.943, 469.572, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.086,
                            "s": [1300.943, 517.075, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.088,
                            "s": [1300.943, 565.69, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.09,
                            "s": [1300.943, 615.419, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.092,
                            "s": [1300.943, 666.262, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.094,
                            "s": [1300.943, 718.217, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.096,
                            "s": [1300.943, 771.286, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.098,
                            "s": [1300.943, 825.469, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.1,
                            "s": [1300.943, 880.765, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.102,
                            "s": [1297.354, 893.139, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.104,
                            "s": [1291.928, 885.015, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.106,
                            "s": [1291.122, 888.437, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.108,
                            "s": [1289.888, 882.141, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.11,
                            "s": [1288.683, 877.413, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.112,
                            "s": [1287.458, 873.117, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.113,
                            "s": [1286.246, 870.225, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.115,
                            "s": [1285.043, 868.829, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.117,
                            "s": [1283.872, 868.679, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 146.119,
                            "s": [1283.088, 868.788, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.121,
                            "s": [1282.951, 868.739, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.123,
                            "s": [1283.043, 868.595, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.125,
                            "s": [1282.886, 871.844, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 154.129101758008,
                            "s": [1286.26, 868.049, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 34.008008008008,
                "op": 3637.61161161161,
                "st": 34.008008008008,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 3,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 122.096,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 124.098,
                            "s": [2.293]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.1,
                            "s": [0.406]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.102,
                            "s": [-3.483]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.104,
                            "s": [-3.101]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.106,
                            "s": [-2.032]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.108,
                            "s": [-1.926]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.11,
                            "s": [-1.759]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.112,
                            "s": [-1.426]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.114,
                            "s": [-1.253]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.116,
                            "s": [-1.15]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.117,
                            "s": [-1.08]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.119,
                            "s": [-1.04]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.121,
                            "s": [-1.085]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.123,
                            "s": [-1.029]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.125,
                            "s": [1.526]
                        }, {
                            "t": 154.127246387012,
                            "s": [1.221]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26,
                            "s": [1323.309, -398.266, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.002,
                            "s": [1323.309, -397.523, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.004,
                            "s": [1323.309, -395.668, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.006,
                            "s": [1323.309, -392.699, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.008,
                            "s": [1323.309, -388.617, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.01,
                            "s": [1323.309, -383.421, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.012,
                            "s": [1323.309, -377.112, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.014,
                            "s": [1323.309, -369.69, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.016,
                            "s": [1323.309, -361.154, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.018,
                            "s": [1323.309, -351.506, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.02,
                            "s": [1323.309, -340.743, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.022,
                            "s": [1323.309, -328.868, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.024,
                            "s": [1323.309, -315.879, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.026,
                            "s": [1323.309, -301.776, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.028,
                            "s": [1323.309, -286.561, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.03,
                            "s": [1323.309, -270.232, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.032,
                            "s": [1323.309, -252.79, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.033,
                            "s": [1323.309, -234.234, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.035,
                            "s": [1323.309, -214.565, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.037,
                            "s": [1323.309, -193.783, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.039,
                            "s": [1323.309, -171.887, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.041,
                            "s": [1323.309, -148.878, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.043,
                            "s": [1323.309, -124.756, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.045,
                            "s": [1323.309, -99.52, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.047,
                            "s": [1323.309, -73.171, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.049,
                            "s": [1323.309, -45.709, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.053,
                            "s": [1323.309, -17.134, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.055,
                            "s": [1323.309, 12.555, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.057,
                            "s": [1323.309, 43.358, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.059,
                            "s": [1323.309, 75.273, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.061,
                            "s": [1323.309, 108.302, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.063,
                            "s": [1323.309, 142.445, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.065,
                            "s": [1323.309, 177.7, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.067,
                            "s": [1323.309, 214.069, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.069,
                            "s": [1323.309, 251.552, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.071,
                            "s": [1323.309, 290.147, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.073,
                            "s": [1323.309, 329.856, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.075,
                            "s": [1323.309, 370.679, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.076,
                            "s": [1323.309, 412.614, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.078,
                            "s": [1323.309, 455.663, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.08,
                            "s": [1323.309, 499.826, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.082,
                            "s": [1323.309, 545.101, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.084,
                            "s": [1323.309, 591.49, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.086,
                            "s": [1323.309, 638.993, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.088,
                            "s": [1323.309, 687.608, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.09,
                            "s": [1323.309, 737.337, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.092,
                            "s": [1323.309, 788.18, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.094,
                            "s": [1323.309, 840.135, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.096,
                            "s": [1323.309, 893.204, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.098,
                            "s": [1325.03, 929.765, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.1,
                            "s": [1327.3, 916.855, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.102,
                            "s": [1328.418, 920.917, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.104,
                            "s": [1328.159, 915.897, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.106,
                            "s": [1326.547, 919.888, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.108,
                            "s": [1325.455, 914.786, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.11,
                            "s": [1324.261, 910.358, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.112,
                            "s": [1323.05, 906.192, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.114,
                            "s": [1321.859, 903.886, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.116,
                            "s": [1320.67, 902.875, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.117,
                            "s": [1319.646, 902.838, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 146.119,
                            "s": [1319.087, 902.9, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.121,
                            "s": [1319.053, 902.781, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.123,
                            "s": [1319.118, 902.713, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.125,
                            "s": [1317.6, 908.786, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 154.127246387012,
                            "s": [1320.678, 904.882, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 38.012012012012,
                "op": 3641.61561561562,
                "st": 38.012012012012,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 4,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 118.092,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 120.094,
                            "s": [0.25]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 122.096,
                            "s": [-4.771]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 124.098,
                            "s": [-2.277]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.1,
                            "s": [-1.05]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.102,
                            "s": [-2.782]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.104,
                            "s": [-2.903]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.106,
                            "s": [-1.976]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.108,
                            "s": [-1.848]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.11,
                            "s": [-1.729]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.112,
                            "s": [-1.326]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.114,
                            "s": [-1.2]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.116,
                            "s": [-1.133]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.118,
                            "s": [-1.065]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.12,
                            "s": [-1.013]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.121,
                            "s": [-1.058]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.123,
                            "s": [-1.004]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.125,
                            "s": [1.528]
                        }, {
                            "t": 154.127344141016,
                            "s": [1.064]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26,
                            "s": [1309.716, -277.89, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.002,
                            "s": [1309.716, -277.148, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.004,
                            "s": [1309.716, -275.292, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.006,
                            "s": [1309.716, -272.324, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.008,
                            "s": [1309.716, -268.241, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.01,
                            "s": [1309.716, -263.046, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.012,
                            "s": [1309.716, -256.737, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.014,
                            "s": [1309.716, -249.315, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.016,
                            "s": [1309.716, -240.779, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.018,
                            "s": [1309.716, -231.13, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.02,
                            "s": [1309.716, -220.368, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.022,
                            "s": [1309.716, -208.492, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.024,
                            "s": [1309.716, -195.503, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.026,
                            "s": [1309.716, -181.401, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.028,
                            "s": [1309.716, -166.186, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.03,
                            "s": [1309.716, -149.857, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.032,
                            "s": [1309.716, -132.414, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.034,
                            "s": [1309.716, -113.859, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.036,
                            "s": [1309.716, -94.19, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.038,
                            "s": [1309.716, -73.408, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.039,
                            "s": [1309.716, -51.512, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.041,
                            "s": [1309.716, -28.503, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.043,
                            "s": [1309.716, -4.381, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.045,
                            "s": [1309.716, 20.855, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.047,
                            "s": [1309.716, 47.204, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.049,
                            "s": [1309.716, 74.666, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.051,
                            "s": [1309.716, 103.242, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.053,
                            "s": [1309.716, 132.931, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.057,
                            "s": [1309.716, 163.733, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.059,
                            "s": [1309.716, 195.649, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.061,
                            "s": [1309.716, 228.678, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.063,
                            "s": [1309.716, 262.82, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.065,
                            "s": [1309.716, 298.076, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.067,
                            "s": [1309.716, 334.445, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.069,
                            "s": [1309.716, 371.927, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.071,
                            "s": [1309.716, 410.523, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.073,
                            "s": [1309.716, 450.232, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.075,
                            "s": [1309.716, 491.054, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.077,
                            "s": [1309.716, 532.99, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.079,
                            "s": [1309.716, 576.039, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.08,
                            "s": [1309.716, 620.201, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.082,
                            "s": [1309.716, 665.477, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.084,
                            "s": [1309.716, 711.866, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.086,
                            "s": [1309.716, 759.368, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.088,
                            "s": [1309.716, 807.984, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.09,
                            "s": [1309.716, 857.713, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.092,
                            "s": [1309.716, 908.555, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.094,
                            "s": [1309.441, 949.836, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.096,
                            "s": [1307.148, 960.49, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.098,
                            "s": [1305.04, 958.196, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.1,
                            "s": [1304.269, 954.832, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.102,
                            "s": [1303.996, 959.389, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.104,
                            "s": [1303.738, 955.639, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.106,
                            "s": [1302.881, 957.54, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.108,
                            "s": [1302.089, 952.978, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.11,
                            "s": [1301.249, 948.073, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.112,
                            "s": [1300.395, 943.395, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.114,
                            "s": [1299.579, 941.091, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.116,
                            "s": [1298.799, 940.085, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.118,
                            "s": [1298.427, 939.945, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 146.12,
                            "s": [1298.364, 939.902, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.121,
                            "s": [1298.372, 939.847, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.123,
                            "s": [1298.406, 939.709, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.125,
                            "s": [1297.362, 941.916, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 154.127344141016,
                            "s": [1299.731, 938.593, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 42.016016016016,
                "op": 3645.61961961962,
                "st": 42.016016016016,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 5,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 118.092,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 120.094,
                            "s": [1.698]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 122.096,
                            "s": [-2.214]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 124.098,
                            "s": [-1.565]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.1,
                            "s": [-1.169]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.102,
                            "s": [-1.795]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.104,
                            "s": [-1.421]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.106,
                            "s": [-1.365]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.108,
                            "s": [-1.187]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.11,
                            "s": [0.327]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.112,
                            "s": [-0.196]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.114,
                            "s": [-0.192]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.116,
                            "s": [-0.135]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.118,
                            "s": [-0.138]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.12,
                            "s": [-0.149]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.122,
                            "s": [-0.135]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.124,
                            "s": [-0.115]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.125,
                            "s": [-0.583]
                        }, {
                            "t": 154.12744189502,
                            "s": [0.48]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26,
                            "s": [1344.354, -224.217, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.002,
                            "s": [1344.354, -223.475, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.004,
                            "s": [1344.354, -221.62, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.006,
                            "s": [1344.354, -218.651, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.008,
                            "s": [1344.354, -214.568, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.01,
                            "s": [1344.354, -209.373, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.012,
                            "s": [1344.354, -203.064, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.014,
                            "s": [1344.354, -195.642, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.016,
                            "s": [1344.354, -187.106, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.018,
                            "s": [1344.354, -177.457, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.02,
                            "s": [1344.354, -166.695, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.022,
                            "s": [1344.354, -154.819, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.024,
                            "s": [1344.354, -141.83, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.026,
                            "s": [1344.354, -127.728, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.028,
                            "s": [1344.354, -112.513, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.03,
                            "s": [1344.354, -96.184, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.032,
                            "s": [1344.354, -78.741, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.034,
                            "s": [1344.354, -60.186, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.036,
                            "s": [1344.354, -40.517, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.038,
                            "s": [1344.354, -19.735, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.04,
                            "s": [1344.354, 2.161, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.042,
                            "s": [1344.354, 25.17, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.043,
                            "s": [1344.354, 49.292, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.045,
                            "s": [1344.354, 74.528, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.047,
                            "s": [1344.354, 100.877, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.049,
                            "s": [1344.354, 128.339, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.051,
                            "s": [1344.354, 156.915, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.053,
                            "s": [1344.354, 186.604, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.055,
                            "s": [1344.354, 217.406, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.057,
                            "s": [1344.354, 249.322, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.061,
                            "s": [1344.354, 282.351, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.063,
                            "s": [1344.354, 316.493, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.065,
                            "s": [1344.354, 351.749, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.067,
                            "s": [1344.354, 388.118, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.069,
                            "s": [1344.354, 425.6, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.071,
                            "s": [1344.354, 464.196, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.073,
                            "s": [1344.354, 503.905, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.075,
                            "s": [1344.354, 544.727, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.077,
                            "s": [1344.354, 586.663, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.079,
                            "s": [1344.354, 629.712, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.081,
                            "s": [1344.354, 673.874, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.083,
                            "s": [1344.354, 719.15, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.084,
                            "s": [1344.354, 765.539, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.086,
                            "s": [1344.354, 813.041, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.088,
                            "s": [1344.354, 861.657, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.09,
                            "s": [1344.354, 911.386, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.092,
                            "s": [1344.354, 962.228, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.094,
                            "s": [1349.376, 987.106, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.096,
                            "s": [1350.41, 989.668, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.098,
                            "s": [1354.822, 988.971, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.1,
                            "s": [1358.432, 987.457, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.102,
                            "s": [1362.794, 987.829, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.104,
                            "s": [1366.639, 986.538, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.106,
                            "s": [1370.611, 987.28, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.108,
                            "s": [1374.351, 984.825, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.11,
                            "s": [1377.04, 979.844, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.112,
                            "s": [1377.232, 975.897, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.114,
                            "s": [1377.297, 974.727, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.116,
                            "s": [1377.327, 974.39, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.118,
                            "s": [1377.312, 974.313, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 146.12,
                            "s": [1377.277, 974.253, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.122,
                            "s": [1377.297, 974.244, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.124,
                            "s": [1377.314, 974.22, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.125,
                            "s": [1376.698, 974.472, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 154.12744189502,
                            "s": [1378.219, 975.325, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 46.02002002002,
                "op": 3649.62362362362,
                "st": 46.02002002002,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 6,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 112.087,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 114.088,
                            "s": [0.01]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 118.092,
                            "s": [0.01]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 120.094,
                            "s": [2.293]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 122.096,
                            "s": [0.017]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 124.098,
                            "s": [0.045]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.1,
                            "s": [0.025]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.102,
                            "s": [0.012]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.106,
                            "s": [0.013]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.108,
                            "s": [-0.03]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.11,
                            "s": [0.007]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.112,
                            "s": [0.011]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.114,
                            "s": [0.084]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.116,
                            "s": [0.054]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.118,
                            "s": [0.046]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.12,
                            "s": [0.039]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.124,
                            "s": [0.038]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.126,
                            "s": [0.054]
                        }, {
                            "t": 154.127539649024,
                            "s": [0.261]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26.001,
                            "s": [1322.5, -62.835, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.003,
                            "s": [1322.5, -62.093, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.004,
                            "s": [1322.5, -60.237, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.006,
                            "s": [1322.5, -57.268, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.008,
                            "s": [1322.5, -53.186, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.01,
                            "s": [1322.5, -47.99, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.012,
                            "s": [1322.5, -41.681, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.014,
                            "s": [1322.5, -34.259, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.016,
                            "s": [1322.5, -25.724, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.018,
                            "s": [1322.5, -16.075, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.02,
                            "s": [1322.5, -5.312, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.022,
                            "s": [1322.5, 6.563, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.024,
                            "s": [1322.5, 19.552, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.026,
                            "s": [1322.5, 33.654, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.028,
                            "s": [1322.5, 48.87, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.03,
                            "s": [1322.5, 65.199, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.032,
                            "s": [1322.5, 82.641, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.034,
                            "s": [1322.5, 101.197, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.036,
                            "s": [1322.5, 120.866, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.038,
                            "s": [1322.5, 141.648, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.04,
                            "s": [1322.5, 163.544, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.042,
                            "s": [1322.5, 186.553, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.044,
                            "s": [1322.5, 210.675, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.046,
                            "s": [1322.5, 235.91, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.047,
                            "s": [1322.5, 262.259, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.049,
                            "s": [1322.5, 289.722, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.051,
                            "s": [1322.5, 318.297, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.053,
                            "s": [1322.5, 347.986, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.055,
                            "s": [1322.5, 378.789, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.057,
                            "s": [1322.5, 410.704, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.059,
                            "s": [1322.5, 443.733, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.061,
                            "s": [1322.5, 477.876, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.065,
                            "s": [1322.5, 513.131, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.067,
                            "s": [1322.5, 549.5, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.069,
                            "s": [1322.5, 586.982, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.071,
                            "s": [1322.5, 625.578, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.073,
                            "s": [1322.5, 665.287, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.075,
                            "s": [1322.5, 706.109, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.077,
                            "s": [1322.5, 748.045, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.079,
                            "s": [1322.5, 791.094, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.081,
                            "s": [1322.5, 835.256, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.083,
                            "s": [1322.5, 880.532, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.085,
                            "s": [1322.5, 926.921, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.087,
                            "s": [1322.5, 974.423, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.088,
                            "s": [1322.502, 1005.694, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.09,
                            "s": [1322.505, 991.74, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.092,
                            "s": [1322.507, 978.9, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.094,
                            "s": [1317.711, 1003.86, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.096,
                            "s": [1313.792, 1009.5, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.098,
                            "s": [1309.643, 1010.386, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.1,
                            "s": [1307.013, 1009.79, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.102,
                            "s": [1302.868, 1010.372, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.104,
                            "s": [1299.732, 1010.04, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.106,
                            "s": [1296.867, 1009.469, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.108,
                            "s": [1294.331, 1009.605, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.11,
                            "s": [1291.708, 1009.456, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.112,
                            "s": [1291.688, 1009.465, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.114,
                            "s": [1291.684, 1009.929, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.116,
                            "s": [1291.682, 1009.782, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.118,
                            "s": [1291.682, 1009.745, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.124,
                            "s": [1291.684, 1009.699, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.126,
                            "s": [1291.714, 1010.023, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 154.127539649024,
                            "s": [1291.901, 1009.807, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 50.024024024024,
                "op": 3653.62762762763,
                "st": 50.024024024024,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 7,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 124.125,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.127,
                            "s": [2.989]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.129,
                            "s": [4.175]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.131,
                            "s": [1.95]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.133,
                            "s": [0.181]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.135,
                            "s": [-0.677]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.137,
                            "s": [-1.534]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.139,
                            "s": [-2.393]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.141,
                            "s": [-3.252]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.143,
                            "s": [-4.112]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.145,
                            "s": [-4.974]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.146,
                            "s": [-5.836]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.148,
                            "s": [-6.705]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.15,
                            "s": [-7.576]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.152,
                            "s": [-8.449]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 154.154,
                            "s": [-9.325]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 156.156,
                            "s": [-10.203]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 158.158,
                            "s": [-11.084]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 160.16,
                            "s": [-11.967]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 162.162,
                            "s": [-12.851]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 164.164,
                            "s": [-13.735]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 166.166,
                            "s": [-14.619]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 168.168,
                            "s": [-13.983]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 170.17,
                            "s": [-12.589]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 172.172,
                            "s": [-9.52]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 174.174,
                            "s": [-5.953]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 176.176,
                            "s": [-1.57]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 178.178,
                            "s": [2.115]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 180.18,
                            "s": [3.881]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 182.182,
                            "s": [5.319]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 184.184,
                            "s": [6.708]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 186.186,
                            "s": [8.067]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 188.188,
                            "s": [9.184]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 190.189,
                            "s": [10.114]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 192.191,
                            "s": [10.89]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 194.193,
                            "s": [11.509]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 196.195,
                            "s": [11.987]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 198.197,
                            "s": [12.311]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 200.201,
                            "s": [12.474]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 202.203,
                            "s": [12.483]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 204.205,
                            "s": [12.344]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 206.207,
                            "s": [12.055]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 208.209,
                            "s": [11.613]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 210.211,
                            "s": [11.016]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 212.213,
                            "s": [10.265]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 214.215,
                            "s": [9.359]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 216.217,
                            "s": [8.294]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 218.219,
                            "s": [7.068]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 220.221,
                            "s": [5.566]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 222.223,
                            "s": [3.803]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 224.225,
                            "s": [1.806]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 226.227,
                            "s": [-0.436]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 228.229,
                            "s": [-0.696]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 230.23,
                            "s": [-0.523]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 232.232,
                            "s": [-0.17]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 234.234,
                            "s": [-0.076]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 236.236,
                            "s": [-0.066]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 238.238,
                            "s": [-0.068]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 240.24,
                            "s": [-0.081]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 242.242,
                            "s": [-0.083]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 244.244,
                            "s": [-0.073]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 246.246,
                            "s": [-0.059]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 248.248,
                            "s": [-0.052]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 250.25,
                            "s": [-0.054]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 252.252,
                            "s": [-0.058]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 254.254,
                            "s": [-0.059]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 256.256,
                            "s": [-0.056]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 258.258,
                            "s": [-0.052]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 260.26,
                            "s": [-0.048]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 264.264,
                            "s": [-0.049]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 268.268,
                            "s": [-0.049]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 270.27,
                            "s": [-0.048]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 272.271,
                            "s": [-0.046]
                        }, {
                            "t": 282.283203125,
                            "s": [-0.046]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 0,
                            "s": [155.026, -1403.311, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 2.002,
                            "s": [155.026, -1402.568, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 4.004,
                            "s": [155.026, -1400.713, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 6.006,
                            "s": [155.026, -1397.744, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 8.008,
                            "s": [155.026, -1393.661, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 10.01,
                            "s": [155.026, -1388.466, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 12.012,
                            "s": [155.026, -1382.157, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 14.014,
                            "s": [155.026, -1374.735, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 16.016,
                            "s": [155.026, -1366.199, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 18.018,
                            "s": [155.026, -1356.55, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 20.02,
                            "s": [155.026, -1345.788, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 22.021,
                            "s": [155.026, -1333.912, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 24.023,
                            "s": [155.026, -1320.924, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26.025,
                            "s": [155.026, -1306.821, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.027,
                            "s": [155.026, -1291.606, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.029,
                            "s": [155.026, -1275.277, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.031,
                            "s": [155.026, -1257.835, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.033,
                            "s": [155.026, -1239.279, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.035,
                            "s": [155.026, -1219.61, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.037,
                            "s": [155.026, -1198.828, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.041,
                            "s": [155.026, -1176.932, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.043,
                            "s": [155.026, -1153.923, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.045,
                            "s": [155.026, -1129.801, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.047,
                            "s": [155.026, -1104.565, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.049,
                            "s": [155.026, -1078.216, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.051,
                            "s": [155.026, -1050.754, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.053,
                            "s": [155.026, -1022.178, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.055,
                            "s": [155.026, -992.489, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.057,
                            "s": [155.026, -961.687, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.059,
                            "s": [155.026, -929.772, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.061,
                            "s": [155.026, -896.743, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.062,
                            "s": [155.026, -862.6, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.064,
                            "s": [155.026, -827.345, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.066,
                            "s": [155.026, -790.976, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.068,
                            "s": [155.026, -753.493, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.07,
                            "s": [155.026, -714.898, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.072,
                            "s": [155.026, -675.189, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.074,
                            "s": [155.026, -634.366, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.076,
                            "s": [155.026, -592.431, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.078,
                            "s": [155.026, -549.382, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.08,
                            "s": [155.026, -505.219, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.082,
                            "s": [155.026, -459.944, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.084,
                            "s": [155.026, -413.555, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.086,
                            "s": [155.026, -366.052, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.088,
                            "s": [155.026, -317.437, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.09,
                            "s": [155.026, -267.708, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.092,
                            "s": [155.026, -216.865, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.094,
                            "s": [155.026, -164.91, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.096,
                            "s": [155.026, -111.841, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.098,
                            "s": [155.026, -57.658, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.1,
                            "s": [155.026, -2.363, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.102,
                            "s": [155.026, 54.047, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.104,
                            "s": [155.026, 111.569, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.105,
                            "s": [155.026, 170.205, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.107,
                            "s": [155.026, 229.954, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.109,
                            "s": [155.026, 290.816, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.111,
                            "s": [155.026, 352.792, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.113,
                            "s": [155.026, 415.881, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.115,
                            "s": [155.026, 480.084, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.117,
                            "s": [155.026, 545.399, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.121,
                            "s": [155.026, 611.829, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.123,
                            "s": [155.026, 679.371, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.125,
                            "s": [155.026, 748.027, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.127,
                            "s": [157.948, 797.459, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.129,
                            "s": [162.709, 792.139, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.131,
                            "s": [164.509, 780.708, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.133,
                            "s": [166.126, 770.039, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.135,
                            "s": [167.397, 759.79, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.137,
                            "s": [168.667, 750.654, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.139,
                            "s": [169.937, 742.63, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.141,
                            "s": [171.205, 735.718, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.143,
                            "s": [172.471, 729.916, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.145,
                            "s": [173.736, 725.225, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 146.146,
                            "s": [175, 721.644, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.148,
                            "s": [176.253, 719.162, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.15,
                            "s": [177.503, 717.786, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.152,
                            "s": [178.748, 717.518, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 154.154,
                            "s": [179.989, 718.357, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 156.156,
                            "s": [181.225, 720.303, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 158.158,
                            "s": [182.456, 723.355, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 160.16,
                            "s": [183.682, 727.513, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 162.162,
                            "s": [184.905, 732.781, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 164.164,
                            "s": [186.128, 739.164, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 166.166,
                            "s": [187.35, 746.659, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 168.168,
                            "s": [189.021, 753.845, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 170.17,
                            "s": [190.915, 761.433, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 172.172,
                            "s": [193.469, 768.551, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 174.174,
                            "s": [196.255, 776.323, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 176.176,
                            "s": [199.411, 784.487, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 178.178,
                            "s": [202.849, 791.08, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 180.18,
                            "s": [205.995, 791.82, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 182.182,
                            "s": [208.174, 791.141, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 184.184,
                            "s": [210.135, 791.105, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 186.186,
                            "s": [212.047, 792.022, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 188.188,
                            "s": [213.81, 792.767, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 190.189,
                            "s": [215.169, 793.159, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 192.191,
                            "s": [216.139, 793.328, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 194.193,
                            "s": [216.886, 793.493, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 196.195,
                            "s": [217.428, 793.725, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 198.197,
                            "s": [217.721, 793.864, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 200.201,
                            "s": [217.746, 793.831, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 202.203,
                            "s": [217.522, 793.687, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 204.205,
                            "s": [217.068, 793.49, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 206.207,
                            "s": [216.376, 793.227, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 208.209,
                            "s": [215.43, 792.866, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 210.211,
                            "s": [214.22, 792.407, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 212.213,
                            "s": [212.744, 791.871, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 214.215,
                            "s": [210.995, 791.272, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 216.217,
                            "s": [208.958, 790.614, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 218.219,
                            "s": [206.616, 789.899, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 220.221,
                            "s": [204.437, 789.262, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 222.223,
                            "s": [202.543, 788.972, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 224.225,
                            "s": [200.798, 789.029, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 226.227,
                            "s": [198.846, 789.045, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 228.229,
                            "s": [197.576, 788.057, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 230.23,
                            "s": [196.501, 787.825, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 232.232,
                            "s": [195.508, 788.557, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 234.234,
                            "s": [195.218, 788.959, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 236.236,
                            "s": [195.277, 788.849, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 238.238,
                            "s": [195.26, 788.734, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 240.24,
                            "s": [195.187, 788.747, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 244.244,
                            "s": [195.191, 788.744, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 246.246,
                            "s": [195.226, 788.758, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 250.25,
                            "s": [195.226, 788.765, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 252.251953125,
                            "s": [195.207, 788.749, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 0,
                "op": 3603.6036036036,
                "st": 0,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 8,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 104.104,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 106.106,
                            "s": [-2.033]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 108.108,
                            "s": [-2.02]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 110.109,
                            "s": [-1.879]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 112.111,
                            "s": [-1.599]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 114.113,
                            "s": [-1.352]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 116.115,
                            "s": [-1.196]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 118.117,
                            "s": [-1.107]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 120.119,
                            "s": [-1.087]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 122.121,
                            "s": [-1.134]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 124.125,
                            "s": [-1.077]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.127,
                            "s": [1.781]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.129,
                            "s": [1.805]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.131,
                            "s": [0.898]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.133,
                            "s": [-0.111]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.135,
                            "s": [-1.362]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.137,
                            "s": [-2.613]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.139,
                            "s": [-3.861]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.141,
                            "s": [-5.107]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.143,
                            "s": [-6.348]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.145,
                            "s": [-7.586]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.147,
                            "s": [-8.819]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.149,
                            "s": [-10.048]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.15,
                            "s": [-11.272]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.152,
                            "s": [-12.491]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 154.154,
                            "s": [-13.704]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 156.156,
                            "s": [-14.911]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 158.158,
                            "s": [-16.111]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 160.16,
                            "s": [-17.305]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 162.162,
                            "s": [-16.22]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 164.164,
                            "s": [-13.271]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 166.166,
                            "s": [-10.106]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 168.168,
                            "s": [-6.662]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 170.17,
                            "s": [-3.506]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 172.172,
                            "s": [-1.193]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 174.174,
                            "s": [0.464]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 176.176,
                            "s": [0.755]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 178.178,
                            "s": [1.954]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 180.18,
                            "s": [3.835]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 182.182,
                            "s": [5.304]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 184.184,
                            "s": [6.703]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 186.186,
                            "s": [8.063]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 188.188,
                            "s": [9.179]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 190.19,
                            "s": [10.11]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 192.192,
                            "s": [10.885]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 194.193,
                            "s": [11.504]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 196.195,
                            "s": [11.983]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 198.197,
                            "s": [12.307]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 200.199,
                            "s": [12.469]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 202.201,
                            "s": [12.479]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 204.205,
                            "s": [12.339]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 206.207,
                            "s": [12.05]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 208.209,
                            "s": [11.608]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 210.211,
                            "s": [11.012]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 212.213,
                            "s": [10.261]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 214.215,
                            "s": [9.354]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 216.217,
                            "s": [8.29]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 218.219,
                            "s": [7.063]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 220.221,
                            "s": [5.562]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 222.223,
                            "s": [3.799]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 224.225,
                            "s": [1.801]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 226.227,
                            "s": [-0.44]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 228.229,
                            "s": [-0.231]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 230.231,
                            "s": [-0.189]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 232.233,
                            "s": [-0.113]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 234.234,
                            "s": [-0.024]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 236.236,
                            "s": [-0.014]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 238.238,
                            "s": [-0.013]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 240.24,
                            "s": [-0.025]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 242.242,
                            "s": [-0.025]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 244.244,
                            "s": [-0.013]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 246.246,
                            "s": [0.001]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 248.248,
                            "s": [0.009]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 250.25,
                            "s": [0.008]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 252.252,
                            "s": [0.004]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 254.254,
                            "s": [0.003]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 256.256,
                            "s": [0.007]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 258.258,
                            "s": [0.012]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 260.26,
                            "s": [0.015]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 264.264,
                            "s": [0.015]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 268.268,
                            "s": [0.015]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 270.27,
                            "s": [0.017]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 272.272,
                            "s": [0.018]
                        }, {
                            "t": 282.281347754004,
                            "s": [0.019]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 0,
                            "s": [92.398, -677.361, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 2.002,
                            "s": [92.398, -676.619, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 4.004,
                            "s": [92.398, -674.763, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 6.006,
                            "s": [92.398, -671.795, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 8.008,
                            "s": [92.398, -667.712, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 10.01,
                            "s": [92.398, -662.517, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 12.012,
                            "s": [92.398, -656.208, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 14.014,
                            "s": [92.398, -648.786, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 16.016,
                            "s": [92.398, -640.25, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 18.018,
                            "s": [92.398, -630.601, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 20.02,
                            "s": [92.398, -619.839, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 22.022,
                            "s": [92.398, -607.963, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 24.024,
                            "s": [92.398, -594.974, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26.025,
                            "s": [92.398, -580.872, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.027,
                            "s": [92.398, -565.657, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.029,
                            "s": [92.398, -549.328, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.031,
                            "s": [92.398, -531.885, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.033,
                            "s": [92.398, -513.33, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.035,
                            "s": [92.398, -493.661, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.037,
                            "s": [92.398, -472.879, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.039,
                            "s": [92.398, -450.983, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.041,
                            "s": [92.398, -427.974, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.045,
                            "s": [92.398, -403.852, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.047,
                            "s": [92.398, -378.616, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.049,
                            "s": [92.398, -352.267, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.051,
                            "s": [92.398, -324.805, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.053,
                            "s": [92.398, -296.229, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.055,
                            "s": [92.398, -266.54, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.057,
                            "s": [92.398, -235.738, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.059,
                            "s": [92.398, -203.822, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.061,
                            "s": [92.398, -170.793, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.063,
                            "s": [92.398, -136.651, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.065,
                            "s": [92.398, -101.396, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.067,
                            "s": [92.398, -65.027, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.068,
                            "s": [92.398, -27.544, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.07,
                            "s": [92.398, 11.051, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.072,
                            "s": [92.398, 50.76, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.074,
                            "s": [92.398, 91.583, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.076,
                            "s": [92.398, 133.518, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.078,
                            "s": [92.398, 176.567, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.08,
                            "s": [92.398, 220.73, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.082,
                            "s": [92.398, 266.005, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.084,
                            "s": [92.398, 312.394, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.086,
                            "s": [92.398, 359.897, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.088,
                            "s": [92.398, 408.512, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.09,
                            "s": [92.398, 458.241, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.092,
                            "s": [92.398, 509.084, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.094,
                            "s": [92.398, 561.039, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.096,
                            "s": [92.398, 614.108, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.098,
                            "s": [92.398, 668.291, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.1,
                            "s": [92.398, 723.587, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.102,
                            "s": [92.398, 779.996, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.104,
                            "s": [92.398, 837.518, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.106,
                            "s": [91.45, 845.177, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.108,
                            "s": [90.215, 838.756, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.109,
                            "s": [89.084, 834.087, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.111,
                            "s": [87.941, 830.13, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.113,
                            "s": [86.803, 827.39, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.115,
                            "s": [85.675, 826.083, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.117,
                            "s": [84.559, 825.975, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.119,
                            "s": [83.779, 826.158, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.121,
                            "s": [83.607, 826.07, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.125,
                            "s": [83.728, 825.977, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.127,
                            "s": [85.24, 831.964, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.129,
                            "s": [88.796, 827.656, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.131,
                            "s": [89.439, 816.154, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.133,
                            "s": [90.265, 806.129, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.135,
                            "s": [91.437, 797.91, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.137,
                            "s": [92.609, 790.805, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.139,
                            "s": [93.783, 784.814, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.141,
                            "s": [94.957, 779.94, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.143,
                            "s": [96.134, 776.18, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.145,
                            "s": [97.311, 773.537, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 146.147,
                            "s": [98.491, 772.01, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.149,
                            "s": [99.661, 771.585, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.15,
                            "s": [100.829, 772.272, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.152,
                            "s": [101.997, 774.072, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 154.154,
                            "s": [103.165, 776.986, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 156.156,
                            "s": [104.331, 781.012, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 158.158,
                            "s": [105.496, 786.153, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 160.16,
                            "s": [106.661, 792.406, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 162.162,
                            "s": [108.042, 797.788, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 164.164,
                            "s": [109.771, 802.588, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 166.166,
                            "s": [111.565, 808.299, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 168.168,
                            "s": [113.264, 815.455, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 170.17,
                            "s": [115.556, 821.252, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 172.172,
                            "s": [118.746, 824.095, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 174.174,
                            "s": [122.404, 825.574, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 176.176,
                            "s": [124.229, 824.367, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 178.178,
                            "s": [125.84, 823.833, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 180.18,
                            "s": [127.962, 822.259, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 182.182,
                            "s": [129.334, 819.634, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 184.184,
                            "s": [130.518, 817.688, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 186.186,
                            "s": [131.719, 816.707, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 188.188,
                            "s": [133.011, 815.883, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 190.19,
                            "s": [133.987, 814.958, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 192.192,
                            "s": [134.648, 814.025, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 194.193,
                            "s": [135.174, 813.307, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 196.195,
                            "s": [135.552, 812.857, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 198.197,
                            "s": [135.738, 812.533, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 200.199,
                            "s": [135.71, 812.266, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 202.201,
                            "s": [135.483, 812.109, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 204.205,
                            "s": [135.074, 812.112, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 206.207,
                            "s": [134.477, 812.262, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 208.209,
                            "s": [133.679, 812.533, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 210.211,
                            "s": [132.677, 812.924, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 212.213,
                            "s": [131.474, 813.455, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 214.215,
                            "s": [130.073, 814.141, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 216.217,
                            "s": [128.471, 814.983, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 218.219,
                            "s": [126.663, 815.988, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 220.221,
                            "s": [125.185, 817.44, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 222.223,
                            "s": [124.182, 819.579, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 224.225,
                            "s": [123.537, 822.355, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 226.227,
                            "s": [122.929, 825.378, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 228.229,
                            "s": [122.339, 824.964, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 230.231,
                            "s": [122.326, 824.431, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 232.233,
                            "s": [122.493, 824.477, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 234.234,
                            "s": [122.574, 824.774, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 236.236,
                            "s": [122.633, 824.663, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 238.238,
                            "s": [122.62, 824.557, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 240.24,
                            "s": [122.56, 824.593, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 244.244,
                            "s": [122.563, 824.585, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 246.246191504004,
                            "s": [122.591, 824.585, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 4.004004004004,
                "op": 3607.60760760761,
                "st": 4.004004004004,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 9,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 100.1,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 102.102,
                            "s": [-4.672]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 104.104,
                            "s": [-3.42]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 106.106,
                            "s": [-2.106]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 108.108,
                            "s": [-2.021]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 110.11,
                            "s": [-1.875]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 112.112,
                            "s": [-1.594]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 114.113,
                            "s": [-1.348]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 116.115,
                            "s": [-1.193]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 118.117,
                            "s": [-1.118]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 120.119,
                            "s": [-1.086]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 122.121,
                            "s": [-1.133]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 124.123,
                            "s": [-1.076]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.125,
                            "s": [1.682]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.129,
                            "s": [1.474]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.131,
                            "s": [0.248]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.133,
                            "s": [-0.977]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.135,
                            "s": [-2.204]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.137,
                            "s": [-3.43]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.139,
                            "s": [-4.655]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.141,
                            "s": [-5.879]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.143,
                            "s": [-7.099]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.145,
                            "s": [-8.318]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.147,
                            "s": [-9.534]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.149,
                            "s": [-10.706]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.151,
                            "s": [-11.866]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.153,
                            "s": [-13.014]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 154.154,
                            "s": [-14.148]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 156.156,
                            "s": [-15.27]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 158.158,
                            "s": [-16.377]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 160.16,
                            "s": [-17.471]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 162.162,
                            "s": [-15.821]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 164.164,
                            "s": [-12.893]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 166.166,
                            "s": [-9.769]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 168.168,
                            "s": [-6.56]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 170.17,
                            "s": [-3.415]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 172.172,
                            "s": [-1.101]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 174.174,
                            "s": [0.547]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 176.176,
                            "s": [0.826]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 178.178,
                            "s": [1.404]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 180.18,
                            "s": [2.163]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 182.182,
                            "s": [2.863]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 184.184,
                            "s": [3.559]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 186.186,
                            "s": [4.184]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 188.188,
                            "s": [4.553]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 190.19,
                            "s": [4.865]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 192.192,
                            "s": [5.126]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 194.194,
                            "s": [5.285]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 196.196,
                            "s": [5.358]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 198.197,
                            "s": [5.345]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 200.199,
                            "s": [5.247]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 202.201,
                            "s": [5.064]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 204.203,
                            "s": [4.792]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 206.205,
                            "s": [4.429]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 208.209,
                            "s": [3.974]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 210.211,
                            "s": [3.425]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 212.213,
                            "s": [2.776]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 214.215,
                            "s": [2.023]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 216.217,
                            "s": [1.161]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 218.219,
                            "s": [0.182]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 220.221,
                            "s": [-0.058]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 222.223,
                            "s": [0.061]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 224.225,
                            "s": [0.139]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 226.227,
                            "s": [0.205]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 228.229,
                            "s": [-0.155]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 230.231,
                            "s": [-0.157]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 232.233,
                            "s": [-0.094]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 234.235,
                            "s": [-0.012]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 236.237,
                            "s": [-0.003]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 238.238,
                            "s": [-0.005]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 240.24,
                            "s": [-0.018]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 242.242,
                            "s": [-0.02]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 244.244,
                            "s": [-0.008]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 246.246,
                            "s": [0.005]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 248.248,
                            "s": [0.011]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 250.25,
                            "s": [0.01]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 252.252,
                            "s": [0.007]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 254.254,
                            "s": [0.005]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 256.256,
                            "s": [0.008]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 258.258,
                            "s": [0.013]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 260.26,
                            "s": [0.016]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 264.264,
                            "s": [0.015]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 268.268,
                            "s": [0.016]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 270.27,
                            "s": [0.017]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 272.272,
                            "s": [0.019]
                        }, {
                            "t": 282.281445508008,
                            "s": [0.019]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 0,
                            "s": [50.943, -526.184, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 2.002,
                            "s": [50.943, -525.441, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 4.004,
                            "s": [50.943, -523.586, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 6.006,
                            "s": [50.943, -520.617, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 8.008,
                            "s": [50.943, -516.535, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 10.01,
                            "s": [50.943, -511.339, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 12.012,
                            "s": [50.943, -505.03, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 14.014,
                            "s": [50.943, -497.608, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 16.016,
                            "s": [50.943, -489.072, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 18.018,
                            "s": [50.943, -479.423, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 20.02,
                            "s": [50.943, -468.661, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 22.022,
                            "s": [50.943, -456.786, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 24.024,
                            "s": [50.943, -443.797, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26.026,
                            "s": [50.943, -429.694, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.028,
                            "s": [50.943, -414.479, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.029,
                            "s": [50.943, -398.15, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.031,
                            "s": [50.943, -380.708, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.033,
                            "s": [50.943, -362.152, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.035,
                            "s": [50.943, -342.483, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.037,
                            "s": [50.943, -321.701, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.039,
                            "s": [50.943, -299.805, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.041,
                            "s": [50.943, -276.796, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.043,
                            "s": [50.943, -252.674, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.045,
                            "s": [50.943, -227.438, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.049,
                            "s": [50.943, -201.089, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.051,
                            "s": [50.943, -173.627, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.053,
                            "s": [50.943, -145.051, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.055,
                            "s": [50.943, -115.362, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.057,
                            "s": [50.943, -84.56, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.059,
                            "s": [50.943, -52.645, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.061,
                            "s": [50.943, -19.616, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.063,
                            "s": [50.943, 14.527, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.065,
                            "s": [50.943, 49.782, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.067,
                            "s": [50.943, 86.151, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.069,
                            "s": [50.943, 123.634, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.071,
                            "s": [50.943, 162.229, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.072,
                            "s": [50.943, 201.938, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.074,
                            "s": [50.943, 242.761, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.076,
                            "s": [50.943, 284.696, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.078,
                            "s": [50.943, 327.745, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.08,
                            "s": [50.943, 371.908, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.082,
                            "s": [50.943, 417.183, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.084,
                            "s": [50.943, 463.572, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.086,
                            "s": [50.943, 511.075, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.088,
                            "s": [50.943, 559.69, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.09,
                            "s": [50.943, 609.419, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.092,
                            "s": [50.943, 660.262, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.094,
                            "s": [50.943, 712.217, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.096,
                            "s": [50.943, 765.286, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.098,
                            "s": [50.943, 819.469, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.1,
                            "s": [50.943, 874.765, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.102,
                            "s": [47.354, 887.139, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.104,
                            "s": [41.928, 879.015, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.106,
                            "s": [41.122, 882.437, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.108,
                            "s": [39.888, 876.141, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.11,
                            "s": [38.683, 871.413, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.112,
                            "s": [37.458, 867.117, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.113,
                            "s": [36.246, 864.225, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.115,
                            "s": [35.043, 862.829, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.117,
                            "s": [33.872, 862.679, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.119,
                            "s": [33.088, 862.788, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.121,
                            "s": [32.951, 862.739, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.123,
                            "s": [33.043, 862.595, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.125,
                            "s": [32.886, 865.844, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.129,
                            "s": [36.26, 862.049, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.131,
                            "s": [37.425, 852.737, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.133,
                            "s": [38.584, 844.536, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.135,
                            "s": [39.74, 837.451, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.137,
                            "s": [40.896, 831.48, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.139,
                            "s": [42.049, 826.62, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.141,
                            "s": [43.2, 822.87, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.143,
                            "s": [44.349, 820.231, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.145,
                            "s": [45.495, 818.703, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 146.147,
                            "s": [46.64, 818.284, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.149,
                            "s": [47.803, 819.005, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.151,
                            "s": [48.968, 820.843, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.153,
                            "s": [50.137, 823.798, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 154.154,
                            "s": [51.309, 827.87, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 156.156,
                            "s": [52.484, 833.06, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 158.158,
                            "s": [53.663, 839.368, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 160.16,
                            "s": [54.846, 846.793, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 162.162,
                            "s": [55.794, 850.288, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 164.164,
                            "s": [57.151, 851.994, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 166.166,
                            "s": [58.619, 854.338, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 168.168,
                            "s": [60.106, 857.683, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 170.17,
                            "s": [61.935, 860.38, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 172.172,
                            "s": [64.423, 860.988, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 174.174,
                            "s": [67.323, 860.884, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 176.176,
                            "s": [68.939, 859.412, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 178.178,
                            "s": [70.016, 858.795, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 180.18,
                            "s": [71.255, 857.835, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 182.182,
                            "s": [71.755, 855.543, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 184.184,
                            "s": [72.026, 853.797, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 186.186,
                            "s": [72.426, 853.066, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 188.188,
                            "s": [73.112, 852.755, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 190.19,
                            "s": [73.492, 852.234, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 192.192,
                            "s": [73.685, 851.638, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 194.194,
                            "s": [73.849, 851.3, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 196.196,
                            "s": [73.954, 851.248, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 198.197,
                            "s": [73.957, 851.329, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 200.199,
                            "s": [73.845, 851.475, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 202.201,
                            "s": [73.632, 851.744, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 204.203,
                            "s": [73.335, 852.196, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 206.205,
                            "s": [72.951, 852.822, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 208.209,
                            "s": [72.469, 853.595, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 210.211,
                            "s": [71.888, 854.516, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 212.213,
                            "s": [71.214, 855.613, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 214.215,
                            "s": [70.451, 856.904, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 216.217,
                            "s": [69.598, 858.397, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 218.219,
                            "s": [68.655, 860.101, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 220.221,
                            "s": [68.048, 860.274, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 222.223,
                            "s": [68.041, 859.997, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 224.225,
                            "s": [68.186, 860.079, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 226.227,
                            "s": [68.31, 860.102, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 228.229,
                            "s": [67.807, 860.631, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 230.231,
                            "s": [67.822, 860.185, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 232.233,
                            "s": [67.959, 860.21, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 234.235,
                            "s": [68.008, 860.444, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 236.237,
                            "s": [68.062, 860.34, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 238.238,
                            "s": [68.053, 860.245, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 240.24,
                            "s": [68.005, 860.297, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 244.244336133008,
                            "s": [68.008, 860.283, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 8.00800800800801,
                "op": 3611.61161161161,
                "st": 8.00800800800801,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 10,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 96.096,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 98.098,
                            "s": [2.293]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 100.1,
                            "s": [0.406]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 102.102,
                            "s": [-3.483]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 104.104,
                            "s": [-3.101]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 106.106,
                            "s": [-2.032]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 108.108,
                            "s": [-1.926]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 110.11,
                            "s": [-1.759]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 112.112,
                            "s": [-1.426]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 114.114,
                            "s": [-1.253]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 116.116,
                            "s": [-1.15]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 118.117,
                            "s": [-1.08]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 120.119,
                            "s": [-1.04]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 122.121,
                            "s": [-1.085]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 124.123,
                            "s": [-1.029]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.125,
                            "s": [1.526]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.127,
                            "s": [1.221]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.129,
                            "s": [0.667]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.133,
                            "s": [0.117]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.135,
                            "s": [-0.429]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.137,
                            "s": [-0.975]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.139,
                            "s": [-1.522]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.141,
                            "s": [-2.073]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.143,
                            "s": [-2.628]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.145,
                            "s": [-3.186]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.147,
                            "s": [-3.749]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.149,
                            "s": [-4.313]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.151,
                            "s": [-4.88]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.153,
                            "s": [-5.451]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 154.155,
                            "s": [-6.025]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 156.157,
                            "s": [-6.603]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 158.158,
                            "s": [-7.184]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 160.16,
                            "s": [-7.768]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 162.162,
                            "s": [-6.394]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 164.164,
                            "s": [-5.717]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 166.166,
                            "s": [-5.039]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 168.168,
                            "s": [-4.472]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 170.17,
                            "s": [-3.258]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 172.172,
                            "s": [-1.016]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 174.174,
                            "s": [0.579]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 176.176,
                            "s": [0.87]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 178.178,
                            "s": [1.349]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 180.18,
                            "s": [2.136]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 182.182,
                            "s": [2.876]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 184.184,
                            "s": [3.612]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 186.186,
                            "s": [4.222]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 188.188,
                            "s": [4.579]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 190.19,
                            "s": [4.893]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 192.192,
                            "s": [5.16]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 194.194,
                            "s": [5.324]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 196.196,
                            "s": [5.393]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 198.198,
                            "s": [5.377]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 200.2,
                            "s": [5.28]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 202.201,
                            "s": [5.098]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 204.203,
                            "s": [4.826]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 206.205,
                            "s": [4.463]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 208.207,
                            "s": [4.008]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 210.209,
                            "s": [3.459]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 212.213,
                            "s": [2.81]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 214.215,
                            "s": [2.057]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 216.217,
                            "s": [1.195]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 218.219,
                            "s": [0.217]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 220.221,
                            "s": [0.006]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 222.223,
                            "s": [0.125]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 224.225,
                            "s": [0.187]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 226.227,
                            "s": [0.242]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 228.229,
                            "s": [-0.011]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 230.231,
                            "s": [-0.041]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 232.233,
                            "s": [-0.004]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 234.235,
                            "s": [0.039]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 236.237,
                            "s": [0.046]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 238.239,
                            "s": [0.037]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 240.241,
                            "s": [0.016]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 244.244,
                            "s": [0.017]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 246.246,
                            "s": [0.025]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 250.25,
                            "s": [0.025]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 252.252,
                            "s": [0.02]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 254.254,
                            "s": [0.017]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 256.256,
                            "s": [0.018]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 258.258,
                            "s": [0.021]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 260.26,
                            "s": [0.023]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 262.262,
                            "s": [0.022]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 264.264,
                            "s": [0.021]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 266.266,
                            "s": [0.019]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 268.268,
                            "s": [0.02]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 270.27,
                            "s": [0.021]
                        }, {
                            "t": 276.275683887012,
                            "s": [0.021]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 0,
                            "s": [113.309, -404.266, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 2.002,
                            "s": [113.309, -403.523, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 4.004,
                            "s": [113.309, -401.668, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 6.006,
                            "s": [113.309, -398.699, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 8.008,
                            "s": [113.309, -394.617, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 10.01,
                            "s": [113.309, -389.421, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 12.012,
                            "s": [113.309, -383.112, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 14.014,
                            "s": [113.309, -375.69, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 16.016,
                            "s": [113.309, -367.154, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 18.018,
                            "s": [113.309, -357.506, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 20.02,
                            "s": [113.309, -346.743, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 22.022,
                            "s": [113.309, -334.868, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 24.024,
                            "s": [113.309, -321.879, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26.026,
                            "s": [113.309, -307.776, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.028,
                            "s": [113.309, -292.561, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.03,
                            "s": [113.309, -276.232, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.032,
                            "s": [113.309, -258.79, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.033,
                            "s": [113.309, -240.234, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.035,
                            "s": [113.309, -220.565, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.037,
                            "s": [113.309, -199.783, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.039,
                            "s": [113.309, -177.887, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.041,
                            "s": [113.309, -154.878, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.043,
                            "s": [113.309, -130.756, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.045,
                            "s": [113.309, -105.52, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.047,
                            "s": [113.309, -79.171, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.049,
                            "s": [113.309, -51.709, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.053,
                            "s": [113.309, -23.134, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.055,
                            "s": [113.309, 6.555, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.057,
                            "s": [113.309, 37.358, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.059,
                            "s": [113.309, 69.273, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.061,
                            "s": [113.309, 102.302, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.063,
                            "s": [113.309, 136.445, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.065,
                            "s": [113.309, 171.7, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.067,
                            "s": [113.309, 208.069, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.069,
                            "s": [113.309, 245.552, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.071,
                            "s": [113.309, 284.147, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.073,
                            "s": [113.309, 323.856, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.075,
                            "s": [113.309, 364.679, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.076,
                            "s": [113.309, 406.614, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.078,
                            "s": [113.309, 449.663, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.08,
                            "s": [113.309, 493.826, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.082,
                            "s": [113.309, 539.101, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.084,
                            "s": [113.309, 585.49, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.086,
                            "s": [113.309, 632.993, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.088,
                            "s": [113.309, 681.608, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.09,
                            "s": [113.309, 731.337, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.092,
                            "s": [113.309, 782.18, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.094,
                            "s": [113.309, 834.135, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.096,
                            "s": [113.309, 887.204, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.098,
                            "s": [115.03, 923.765, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.1,
                            "s": [117.3, 910.855, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.102,
                            "s": [118.418, 914.917, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.104,
                            "s": [118.159, 909.897, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.106,
                            "s": [116.547, 913.888, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.108,
                            "s": [115.455, 908.786, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.11,
                            "s": [114.261, 904.358, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.112,
                            "s": [113.05, 900.192, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.114,
                            "s": [111.859, 897.886, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.116,
                            "s": [110.67, 896.875, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.117,
                            "s": [109.646, 896.838, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.119,
                            "s": [109.087, 896.9, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.121,
                            "s": [109.053, 896.781, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.123,
                            "s": [109.118, 896.713, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.125,
                            "s": [107.6, 902.786, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.127,
                            "s": [110.678, 898.882, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.129,
                            "s": [111.758, 889.548, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.133,
                            "s": [112.845, 881.336, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.135,
                            "s": [113.933, 874.235, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.137,
                            "s": [115.023, 868.247, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.139,
                            "s": [116.115, 863.375, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.141,
                            "s": [117.209, 859.618, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.143,
                            "s": [118.306, 856.978, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.145,
                            "s": [119.404, 855.454, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 146.147,
                            "s": [120.505, 855.047, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.149,
                            "s": [121.607, 855.754, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.151,
                            "s": [122.711, 857.577, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.153,
                            "s": [123.817, 860.516, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 154.155,
                            "s": [124.925, 864.572, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 156.157,
                            "s": [126.036, 869.743, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 158.158,
                            "s": [127.148, 876.03, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 160.16,
                            "s": [128.263, 883.432, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 162.162,
                            "s": [128.329, 888.064, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 164.164,
                            "s": [129.166, 888.093, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 166.166,
                            "s": [130.035, 888.709, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 168.168,
                            "s": [130.63, 889.983, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 170.17,
                            "s": [131.334, 892.16, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 172.172,
                            "s": [133.383, 895.368, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 174.174,
                            "s": [135.476, 897.177, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 176.176,
                            "s": [136.294, 896.093, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 178.178,
                            "s": [136.525, 895.981, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 180.18,
                            "s": [137.206, 895.966, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 182.182,
                            "s": [137.202, 894.566, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 184.184,
                            "s": [136.948, 893.709, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 186.186,
                            "s": [136.903, 893.662, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 188.188,
                            "s": [137.32, 893.744, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 190.19,
                            "s": [137.476, 893.575, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 192.192,
                            "s": [137.48, 893.282, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 194.194,
                            "s": [137.527, 893.13, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 196.196,
                            "s": [137.579, 893.152, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 198.198,
                            "s": [137.593, 893.213, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 200.2,
                            "s": [137.552, 893.251, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 202.201,
                            "s": [137.472, 893.32, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 204.203,
                            "s": [137.372, 893.469, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 206.205,
                            "s": [137.248, 893.687, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 208.207,
                            "s": [137.089, 893.948, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 210.209,
                            "s": [136.894, 894.249, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 212.213,
                            "s": [136.667, 894.609, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 214.215,
                            "s": [136.412, 895.038, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 216.217,
                            "s": [136.128, 895.536, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 218.219,
                            "s": [135.813, 896.1, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 220.221,
                            "s": [135.385, 895.995, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 222.223,
                            "s": [135.462, 895.874, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 224.225,
                            "s": [135.563, 896.027, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 226.227,
                            "s": [135.647, 896.113, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 228.229,
                            "s": [135.309, 896.147, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 230.231,
                            "s": [135.331, 895.708, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 232.233,
                            "s": [135.433, 895.792, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 234.235,
                            "s": [135.453, 896.058, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 236.237,
                            "s": [135.5, 895.982, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 238.239,
                            "s": [135.494, 895.902, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 240.240527637012,
                            "s": [135.46, 895.935, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 12.012012012012,
                "op": 3615.61561561562,
                "st": 12.012012012012,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 11,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 92.092,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 94.094,
                            "s": [0.25]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 96.096,
                            "s": [-4.771]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 98.098,
                            "s": [-2.277]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 100.1,
                            "s": [-1.05]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 102.102,
                            "s": [-2.782]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 104.104,
                            "s": [-2.903]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 106.106,
                            "s": [-1.976]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 108.108,
                            "s": [-1.848]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 110.11,
                            "s": [-1.729]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 112.112,
                            "s": [-1.326]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 114.114,
                            "s": [-1.2]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 116.116,
                            "s": [-1.133]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 118.118,
                            "s": [-1.065]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 120.12,
                            "s": [-1.013]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 122.121,
                            "s": [-1.058]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 124.123,
                            "s": [-1.004]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.125,
                            "s": [1.528]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.127,
                            "s": [1.064]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.129,
                            "s": [0.705]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.131,
                            "s": [0.327]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.133,
                            "s": [-0.05]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.137,
                            "s": [-0.428]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.139,
                            "s": [-0.806]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.141,
                            "s": [-1.184]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.143,
                            "s": [-1.562]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.145,
                            "s": [-1.939]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.147,
                            "s": [-2.317]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.149,
                            "s": [-2.695]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.151,
                            "s": [-3.073]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.153,
                            "s": [-3.451]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 154.155,
                            "s": [-3.828]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 156.157,
                            "s": [-4.206]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 158.159,
                            "s": [-4.493]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 160.161,
                            "s": [-4.854]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 162.163,
                            "s": [-6.442]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 164.164,
                            "s": [-5.735]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 166.166,
                            "s": [-5.044]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 168.168,
                            "s": [-4.437]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 170.17,
                            "s": [-3.217]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 172.172,
                            "s": [-0.996]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 174.174,
                            "s": [0.563]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 176.176,
                            "s": [0.875]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 178.178,
                            "s": [1.231]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 180.18,
                            "s": [1.271]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 182.182,
                            "s": [0.83]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 184.184,
                            "s": [0.288]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 186.186,
                            "s": [0.131]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 188.188,
                            "s": [0.295]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 190.19,
                            "s": [0.311]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 192.192,
                            "s": [0.258]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 194.194,
                            "s": [0.245]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 196.196,
                            "s": [0.265]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 198.198,
                            "s": [0.28]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 200.2,
                            "s": [0.276]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 202.202,
                            "s": [0.266]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 204.204,
                            "s": [0.265]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 206.205,
                            "s": [0.27]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 210.209,
                            "s": [0.269]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 212.211,
                            "s": [0.267]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 218.219,
                            "s": [0.266]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 220.221,
                            "s": [0.054]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 222.223,
                            "s": [0.158]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 224.225,
                            "s": [0.216]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 226.227,
                            "s": [0.262]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 228.229,
                            "s": [0.041]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 230.231,
                            "s": [0.01]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 232.233,
                            "s": [0.052]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 234.235,
                            "s": [0.087]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 236.237,
                            "s": [0.089]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 238.239,
                            "s": [0.079]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 240.241,
                            "s": [0.058]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 242.243,
                            "s": [0.047]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 244.245,
                            "s": [0.05]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 246.246,
                            "s": [0.054]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 248.248,
                            "s": [0.054]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 250.25,
                            "s": [0.049]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 252.252,
                            "s": [0.042]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 254.254,
                            "s": [0.038]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 258.258,
                            "s": [0.039]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 260.26,
                            "s": [0.039]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 262.262,
                            "s": [0.037]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 264.264,
                            "s": [0.035]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 266.266,
                            "s": [0.033]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 274.274,
                            "s": [0.032]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 276.276,
                            "s": [0.031]
                        }, {
                            "t": 278.277734766016,
                            "s": [0.031]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 0,
                            "s": [39.716, -283.89, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 2.002,
                            "s": [39.716, -283.148, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 4.004,
                            "s": [39.716, -281.292, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 6.006,
                            "s": [39.716, -278.324, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 8.008,
                            "s": [39.716, -274.241, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 10.01,
                            "s": [39.716, -269.046, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 12.012,
                            "s": [39.716, -262.737, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 14.014,
                            "s": [39.716, -255.315, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 16.016,
                            "s": [39.716, -246.779, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 18.018,
                            "s": [39.716, -237.13, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 20.02,
                            "s": [39.716, -226.368, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 22.022,
                            "s": [39.716, -214.492, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 24.024,
                            "s": [39.716, -201.503, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26.026,
                            "s": [39.716, -187.401, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.028,
                            "s": [39.716, -172.186, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.03,
                            "s": [39.716, -155.857, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.032,
                            "s": [39.716, -138.414, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.034,
                            "s": [39.716, -119.859, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.036,
                            "s": [39.716, -100.19, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.038,
                            "s": [39.716, -79.408, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.039,
                            "s": [39.716, -57.512, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.041,
                            "s": [39.716, -34.503, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.043,
                            "s": [39.716, -10.381, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.045,
                            "s": [39.716, 14.855, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.047,
                            "s": [39.716, 41.204, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.049,
                            "s": [39.716, 68.666, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.051,
                            "s": [39.716, 97.242, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.053,
                            "s": [39.716, 126.931, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.057,
                            "s": [39.716, 157.733, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.059,
                            "s": [39.716, 189.649, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.061,
                            "s": [39.716, 222.678, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.063,
                            "s": [39.716, 256.82, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.065,
                            "s": [39.716, 292.076, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.067,
                            "s": [39.716, 328.445, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.069,
                            "s": [39.716, 365.927, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.071,
                            "s": [39.716, 404.523, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.073,
                            "s": [39.716, 444.232, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.075,
                            "s": [39.716, 485.054, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.077,
                            "s": [39.716, 526.99, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.079,
                            "s": [39.716, 570.039, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.08,
                            "s": [39.716, 614.201, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.082,
                            "s": [39.716, 659.477, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.084,
                            "s": [39.716, 705.866, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.086,
                            "s": [39.716, 753.368, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.088,
                            "s": [39.716, 801.984, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.09,
                            "s": [39.716, 851.713, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.092,
                            "s": [39.716, 902.555, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.094,
                            "s": [39.441, 943.836, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.096,
                            "s": [37.148, 954.49, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.098,
                            "s": [35.04, 952.196, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.1,
                            "s": [34.269, 948.832, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.102,
                            "s": [33.996, 953.389, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.104,
                            "s": [33.738, 949.639, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.106,
                            "s": [32.881, 951.54, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.108,
                            "s": [32.089, 946.978, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.11,
                            "s": [31.249, 942.073, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.112,
                            "s": [30.395, 937.395, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.114,
                            "s": [29.579, 935.091, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.116,
                            "s": [28.799, 934.085, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.118,
                            "s": [28.427, 933.945, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.12,
                            "s": [28.364, 933.902, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.121,
                            "s": [28.372, 933.847, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.123,
                            "s": [28.406, 933.709, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.125,
                            "s": [27.362, 935.916, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.127,
                            "s": [29.731, 932.593, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.129,
                            "s": [30.45, 924.716, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.131,
                            "s": [31.169, 917.938, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.133,
                            "s": [31.889, 912.273, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.137,
                            "s": [32.608, 907.722, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.139,
                            "s": [33.328, 904.284, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.141,
                            "s": [34.047, 901.959, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.143,
                            "s": [34.766, 900.748, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.145,
                            "s": [35.486, 900.65, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 146.147,
                            "s": [36.205, 901.665, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.149,
                            "s": [36.925, 903.793, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.151,
                            "s": [37.644, 907.035, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.153,
                            "s": [38.363, 911.391, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 154.155,
                            "s": [39.083, 916.859, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 156.157,
                            "s": [39.802, 923.441, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 158.159,
                            "s": [39.617, 929.439, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 160.161,
                            "s": [38.977, 933.099, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 162.163,
                            "s": [38.394, 933.828, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 164.164,
                            "s": [38.705, 932.944, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 166.166,
                            "s": [39.005, 932.528, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 168.168,
                            "s": [39.155, 932.836, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 170.17,
                            "s": [39.193, 933.032, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 172.172,
                            "s": [39.77, 932.66, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 174.174,
                            "s": [40.889, 931.883, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 176.176,
                            "s": [41.513, 930.334, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 178.178,
                            "s": [41.604, 929.625, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 180.18,
                            "s": [41.937, 929.99, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 182.182,
                            "s": [41.78, 930.09, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 184.184,
                            "s": [41.402, 930.933, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 186.186,
                            "s": [41.182, 931.551, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 188.188,
                            "s": [41.418, 931.447, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 190.19,
                            "s": [41.454, 931.419, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 192.192,
                            "s": [41.376, 931.404, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 196.196,
                            "s": [41.387, 931.388, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 218.219,
                            "s": [41.388, 931.389, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 220.221,
                            "s": [41.147, 931.657, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 222.223,
                            "s": [41.274, 931.381, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 224.225,
                            "s": [41.342, 931.426, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 226.227,
                            "s": [41.396, 931.426, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 228.229,
                            "s": [41.205, 931.799, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 230.231,
                            "s": [41.239, 931.431, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 232.233,
                            "s": [41.31, 931.437, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 234.235,
                            "s": [41.319, 931.621, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 236.237,
                            "s": [41.352, 931.556, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 240.240625391016,
                            "s": [41.325, 931.566, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 16.016016016016,
                "op": 3619.61961961962,
                "st": 16.016016016016,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 12,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 92.092,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 94.094,
                            "s": [1.698]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 96.096,
                            "s": [-2.214]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 98.098,
                            "s": [-1.565]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 100.1,
                            "s": [-1.169]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 102.102,
                            "s": [-1.795]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 104.104,
                            "s": [-1.421]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 106.106,
                            "s": [-1.365]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 108.108,
                            "s": [-1.187]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 110.11,
                            "s": [0.327]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 112.112,
                            "s": [-0.196]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 114.114,
                            "s": [-0.192]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 116.116,
                            "s": [-0.135]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 118.118,
                            "s": [-0.138]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 120.12,
                            "s": [-0.149]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 122.122,
                            "s": [-0.135]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 124.124,
                            "s": [-0.115]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.125,
                            "s": [-0.583]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.127,
                            "s": [0.48]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.129,
                            "s": [-0.117]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.131,
                            "s": [-0.714]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.133,
                            "s": [-1.311]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.135,
                            "s": [-1.907]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.137,
                            "s": [-2.504]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 140.141,
                            "s": [-3.1]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 142.143,
                            "s": [-3.697]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 144.145,
                            "s": [-3.129]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 146.147,
                            "s": [-1.978]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.149,
                            "s": [-0.549]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.151,
                            "s": [0.913]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.153,
                            "s": [1.689]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 154.155,
                            "s": [2.32]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 156.157,
                            "s": [2.76]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 158.159,
                            "s": [0.931]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 160.161,
                            "s": [-0.139]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 162.163,
                            "s": [-0.318]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 164.165,
                            "s": [-0.146]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 166.167,
                            "s": [-0.082]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 168.168,
                            "s": [-0.19]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 170.17,
                            "s": [-0.262]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 172.172,
                            "s": [-0.269]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 174.174,
                            "s": [0.386]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 176.176,
                            "s": [0.401]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 178.178,
                            "s": [0.329]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 180.18,
                            "s": [0.397]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 182.182,
                            "s": [0.425]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 184.184,
                            "s": [0.313]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 186.186,
                            "s": [0.122]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 188.188,
                            "s": [0.246]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 190.19,
                            "s": [0.257]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 192.192,
                            "s": [0.221]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 194.194,
                            "s": [0.216]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 196.196,
                            "s": [0.226]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 198.198,
                            "s": [0.232]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 200.2,
                            "s": [0.228]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 202.202,
                            "s": [0.221]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 206.206,
                            "s": [0.222]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 208.208,
                            "s": [0.222]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 210.209,
                            "s": [0.22]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 212.211,
                            "s": [0.218]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 216.215,
                            "s": [0.217]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 218.217,
                            "s": [0.216]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 220.221,
                            "s": [0.051]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 222.223,
                            "s": [0.155]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 224.225,
                            "s": [0.188]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 226.227,
                            "s": [0.219]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 228.229,
                            "s": [0.054]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 230.231,
                            "s": [0.124]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 232.233,
                            "s": [0.16]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 234.235,
                            "s": [0.163]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 236.237,
                            "s": [0.176]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 238.239,
                            "s": [0.179]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 240.241,
                            "s": [0.16]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 242.243,
                            "s": [0.15]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 244.245,
                            "s": [0.153]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 246.247,
                            "s": [0.156]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 248.249,
                            "s": [0.154]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 250.25,
                            "s": [0.15]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 252.252,
                            "s": [0.145]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 254.254,
                            "s": [0.142]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 260.26,
                            "s": [0.141]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 262.262,
                            "s": [0.14]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 264.264,
                            "s": [0.138]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 266.266,
                            "s": [0.136]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 274.274,
                            "s": [0.135]
                        }, {
                            "t": 276.27587939502,
                            "s": [0.135]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 0,
                            "s": [134.354, -230.217, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 2.002,
                            "s": [134.354, -229.475, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 4.004,
                            "s": [134.354, -227.62, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 6.006,
                            "s": [134.354, -224.651, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 8.008,
                            "s": [134.354, -220.568, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 10.01,
                            "s": [134.354, -215.373, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 12.012,
                            "s": [134.354, -209.064, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 14.014,
                            "s": [134.354, -201.642, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 16.016,
                            "s": [134.354, -193.106, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 18.018,
                            "s": [134.354, -183.457, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 20.02,
                            "s": [134.354, -172.695, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 22.022,
                            "s": [134.354, -160.819, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 24.024,
                            "s": [134.354, -147.83, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26.026,
                            "s": [134.354, -133.728, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.028,
                            "s": [134.354, -118.513, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.03,
                            "s": [134.354, -102.184, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.032,
                            "s": [134.354, -84.741, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.034,
                            "s": [134.354, -66.186, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.036,
                            "s": [134.354, -46.517, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.038,
                            "s": [134.354, -25.735, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.04,
                            "s": [134.354, -3.839, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.042,
                            "s": [134.354, 19.17, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.043,
                            "s": [134.354, 43.292, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.045,
                            "s": [134.354, 68.528, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.047,
                            "s": [134.354, 94.877, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.049,
                            "s": [134.354, 122.339, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.051,
                            "s": [134.354, 150.915, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.053,
                            "s": [134.354, 180.604, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.055,
                            "s": [134.354, 211.406, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.057,
                            "s": [134.354, 243.322, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.061,
                            "s": [134.354, 276.351, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.063,
                            "s": [134.354, 310.493, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.065,
                            "s": [134.354, 345.749, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.067,
                            "s": [134.354, 382.118, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.069,
                            "s": [134.354, 419.6, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.071,
                            "s": [134.354, 458.196, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.073,
                            "s": [134.354, 497.905, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.075,
                            "s": [134.354, 538.727, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.077,
                            "s": [134.354, 580.663, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.079,
                            "s": [134.354, 623.712, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.081,
                            "s": [134.354, 667.874, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.083,
                            "s": [134.354, 713.15, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.084,
                            "s": [134.354, 759.539, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.086,
                            "s": [134.354, 807.041, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.088,
                            "s": [134.354, 855.657, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.09,
                            "s": [134.354, 905.386, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.092,
                            "s": [134.354, 956.228, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.094,
                            "s": [139.376, 981.106, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.096,
                            "s": [140.41, 983.668, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.098,
                            "s": [144.822, 982.971, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.1,
                            "s": [148.432, 981.457, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.102,
                            "s": [152.794, 981.829, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.104,
                            "s": [156.639, 980.538, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.106,
                            "s": [160.611, 981.28, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.108,
                            "s": [164.351, 978.825, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.11,
                            "s": [167.04, 973.844, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.112,
                            "s": [167.232, 969.897, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.114,
                            "s": [167.297, 968.727, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.116,
                            "s": [167.327, 968.39, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.118,
                            "s": [167.312, 968.313, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 120.12,
                            "s": [167.277, 968.253, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 122.122,
                            "s": [167.297, 968.244, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.124,
                            "s": [167.314, 968.22, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.125,
                            "s": [166.698, 968.472, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.127,
                            "s": [168.219, 969.325, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.129,
                            "s": [168.232, 964.384, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.131,
                            "s": [168.245, 960.55, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.133,
                            "s": [168.258, 957.829, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 136.135,
                            "s": [168.271, 956.222, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 138.137,
                            "s": [168.284, 955.729, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 140.141,
                            "s": [168.297, 956.348, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 142.143,
                            "s": [168.31, 958.081, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 144.145,
                            "s": [168.668, 959.964, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 146.147,
                            "s": [169.199, 962.477, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.149,
                            "s": [169.759, 965.888, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.151,
                            "s": [170.284, 968.165, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.153,
                            "s": [170.511, 967.575, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 154.155,
                            "s": [170.719, 967.337, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 156.157,
                            "s": [170.865, 967.158, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 158.159,
                            "s": [171.309, 967.78, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 160.161,
                            "s": [171.37, 967.631, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 162.163,
                            "s": [171.29, 967.695, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 164.165,
                            "s": [171.424, 967.473, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 166.167,
                            "s": [171.458, 967.457, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 168.168,
                            "s": [171.43, 967.561, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 170.17,
                            "s": [171.334, 967.587, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 172.172,
                            "s": [171.346, 967.359, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 174.174,
                            "s": [171.721, 968.616, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 176.176,
                            "s": [171.779, 968.019, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 178.178,
                            "s": [171.522, 967.942, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 180.18,
                            "s": [171.714, 968.312, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 182.182,
                            "s": [171.728, 967.778, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 184.184,
                            "s": [171.568, 967.568, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 186.186,
                            "s": [171.465, 967.724, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 188.188,
                            "s": [171.588, 967.867, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 190.19,
                            "s": [171.607, 967.849, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 192.192,
                            "s": [171.565, 967.759, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 196.196,
                            "s": [171.571, 967.75, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 200.2,
                            "s": [171.577, 967.749, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 218.217,
                            "s": [171.571, 967.695, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 220.221,
                            "s": [171.45, 967.559, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 222.223,
                            "s": [171.513, 967.542, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 224.225,
                            "s": [171.546, 967.643, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 226.227,
                            "s": [171.57, 967.703, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 228.229,
                            "s": [171.473, 967.631, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 230.231,
                            "s": [171.487, 967.456, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 232.233,
                            "s": [171.525, 967.522, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 234.235,
                            "s": [171.521, 967.662, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 236.237,
                            "s": [171.541, 967.634, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 238.23877002002,
                            "s": [171.538, 967.591, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 20.02002002002,
                "op": 3623.62362362362,
                "st": 20.02002002002,
                "bm": 0
            }, {
                "ddd": 0,
                "ind": 13,
                "ty": 0,
                "nm": "coin_side",
                "refId": "comp_0",
                "sr": 1,
                "ks": {
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    },
                    "r": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 86.087,
                            "s": [0]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 88.088,
                            "s": [0.01]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 92.092,
                            "s": [0.01]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 94.094,
                            "s": [2.293]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 96.096,
                            "s": [0.017]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 98.098,
                            "s": [0.045]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 100.1,
                            "s": [0.025]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 102.102,
                            "s": [0.012]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 106.106,
                            "s": [0.013]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 108.108,
                            "s": [-0.03]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 110.11,
                            "s": [0.007]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 112.112,
                            "s": [0.011]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 114.114,
                            "s": [0.084]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 116.116,
                            "s": [0.054]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 118.118,
                            "s": [0.046]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 120.12,
                            "s": [0.039]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 124.124,
                            "s": [0.038]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 126.126,
                            "s": [0.054]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 128.128,
                            "s": [0.261]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 130.129,
                            "s": [0.357]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 132.131,
                            "s": [0.323]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 134.133,
                            "s": [0.094]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 136.135,
                            "s": [0.093]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 138.137,
                            "s": [0.092]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 148.149,
                            "s": [0.091]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 150.151,
                            "s": [0.151]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 152.153,
                            "s": [0.11]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 154.155,
                            "s": [0.106]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 158.159,
                            "s": [0.105]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 160.161,
                            "s": [0.078]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 162.163,
                            "s": [0.031]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 164.165,
                            "s": [0.012]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 166.167,
                            "s": [0.008]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 168.169,
                            "s": [0.004]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 170.171,
                            "s": [0.004]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 172.172,
                            "s": [0.008]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 174.174,
                            "s": [0.077]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 176.176,
                            "s": [0.264]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 178.178,
                            "s": [0.161]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 180.18,
                            "s": [0.113]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 182.182,
                            "s": [0.235]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 184.184,
                            "s": [0.103]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 186.186,
                            "s": [0.084]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 188.188,
                            "s": [0.095]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 190.19,
                            "s": [0.101]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 192.192,
                            "s": [0.093]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 194.194,
                            "s": [0.086]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 196.196,
                            "s": [0.087]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 198.198,
                            "s": [0.09]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 200.2,
                            "s": [0.089]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 202.202,
                            "s": [0.085]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 204.204,
                            "s": [0.083]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 208.208,
                            "s": [0.083]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 210.21,
                            "s": [0.081]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 212.212,
                            "s": [0.08]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 214.213,
                            "s": [0.079]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 216.215,
                            "s": [0.078]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 218.217,
                            "s": [0.078]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 220.219,
                            "s": [0.081]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 222.221,
                            "s": [0.084]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 224.225,
                            "s": [0.083]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 226.227,
                            "s": [0.087]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 228.229,
                            "s": [0.089]
                        }, {
                            "i": {
                                "x": [0.833],
                                "y": [0.833]
                            },
                            "o": {
                                "x": [0.167],
                                "y": [0.167]
                            },
                            "t": 232.233,
                            "s": [0.089]
                        }, {
                            "t": 234.234961524024,
                            "s": [0.088]
                        }],
                        "ix": 10
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 0.001,
                            "s": [92.5, -68.835, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 2.003,
                            "s": [92.5, -68.093, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 4.004,
                            "s": [92.5, -66.237, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 6.006,
                            "s": [92.5, -63.268, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 8.008,
                            "s": [92.5, -59.186, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 10.01,
                            "s": [92.5, -53.99, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 12.012,
                            "s": [92.5, -47.681, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 14.014,
                            "s": [92.5, -40.259, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 16.016,
                            "s": [92.5, -31.724, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 18.018,
                            "s": [92.5, -22.075, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 20.02,
                            "s": [92.5, -11.312, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 22.022,
                            "s": [92.5, 0.563, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 24.024,
                            "s": [92.5, 13.552, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 26.026,
                            "s": [92.5, 27.654, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 28.028,
                            "s": [92.5, 42.87, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 30.03,
                            "s": [92.5, 59.199, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 32.032,
                            "s": [92.5, 76.641, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 34.034,
                            "s": [92.5, 95.197, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 36.036,
                            "s": [92.5, 114.866, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 38.038,
                            "s": [92.5, 135.648, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 40.04,
                            "s": [92.5, 157.544, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 42.042,
                            "s": [92.5, 180.553, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 44.044,
                            "s": [92.5, 204.675, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 46.046,
                            "s": [92.5, 229.91, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 48.047,
                            "s": [92.5, 256.259, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 50.049,
                            "s": [92.5, 283.722, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 52.051,
                            "s": [92.5, 312.297, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 54.053,
                            "s": [92.5, 341.986, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 56.055,
                            "s": [92.5, 372.789, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 58.057,
                            "s": [92.5, 404.704, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 60.059,
                            "s": [92.5, 437.733, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 62.061,
                            "s": [92.5, 471.876, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 64.065,
                            "s": [92.5, 507.131, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 66.067,
                            "s": [92.5, 543.5, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 68.069,
                            "s": [92.5, 580.982, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 70.071,
                            "s": [92.5, 619.578, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 72.073,
                            "s": [92.5, 659.287, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 74.075,
                            "s": [92.5, 700.109, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 76.077,
                            "s": [92.5, 742.045, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 78.079,
                            "s": [92.5, 785.094, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 80.081,
                            "s": [92.5, 829.256, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 82.083,
                            "s": [92.5, 874.532, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 84.085,
                            "s": [92.5, 920.921, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 86.087,
                            "s": [92.5, 968.423, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 88.088,
                            "s": [92.502, 999.694, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 90.09,
                            "s": [92.505, 985.74, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 92.092,
                            "s": [92.507, 972.9, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 94.094,
                            "s": [87.711, 997.86, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 96.096,
                            "s": [83.792, 1003.5, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 98.098,
                            "s": [79.643, 1004.386, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 100.1,
                            "s": [77.013, 1003.79, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 102.102,
                            "s": [72.868, 1004.372, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 104.104,
                            "s": [69.732, 1004.04, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 106.106,
                            "s": [66.867, 1003.469, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 108.108,
                            "s": [64.331, 1003.605, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 110.11,
                            "s": [61.708, 1003.456, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 112.112,
                            "s": [61.688, 1003.465, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 114.114,
                            "s": [61.684, 1003.929, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 116.116,
                            "s": [61.682, 1003.782, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 118.118,
                            "s": [61.682, 1003.745, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 124.124,
                            "s": [61.684, 1003.699, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 126.126,
                            "s": [61.714, 1004.023, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 128.128,
                            "s": [61.901, 1003.807, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 130.129,
                            "s": [61.648, 1002.677, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 132.131,
                            "s": [61.55, 1002.736, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 134.133,
                            "s": [61.477, 1003.236, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 148.149,
                            "s": [61.477, 1003.234, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 150.151,
                            "s": [61.499, 1003.279, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 152.153,
                            "s": [61.51, 1003.414, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 160.161,
                            "s": [61.518, 1003.39, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 162.163,
                            "s": [61.528, 1003.473, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 168.169,
                            "s": [61.521, 1003.481, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 170.171,
                            "s": [61.522, 1003.506, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 172.172,
                            "s": [61.52, 1003.524, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 174.174,
                            "s": [61.58, 1003.558, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 176.176,
                            "s": [61.587, 1003.161, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 178.178,
                            "s": [61.555, 1003.262, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 180.18,
                            "s": [61.559, 1003.553, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 182.182,
                            "s": [61.567, 1003.136, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "i": {
                                "x": 0.833,
                                "y": 0.833
                            },
                            "o": {
                                "x": 0.167,
                                "y": 0.167
                            },
                            "t": 184.184,
                            "s": [61.513, 1003.321, 0],
                            "to": [0, 0, 0],
                            "ti": [0, 0, 0]
                        }, {
                            "t": 192.191992774024,
                            "s": [61.535, 1003.299, 0]
                        }],
                        "ix": 2
                    },
                    "a": {
                        "a": 0,
                        "k": [426, 97, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [30, 30, 100],
                        "ix": 6
                    }
                },
                "ao": 0,
                "w": 852,
                "h": 194,
                "ip": 24.024024024024,
                "op": 3627.62762762763,
                "st": 24.024024024024,
                "bm": 0
            }],
            "markers": []
        };
        var container = document.getElementById('lottie-test');
        var params = {
            container: container,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            animationData: animationData
        };

        var anim;
        anim = bodymovin.loadAnimation(params);
    </script>
    
    <!-- редирект -->
    <script>
        var strGET = window.location.search.replace( '?', ''); 
        var sParameterName = strGET.split('=');
        sParameterName.shift();
        var res =  sParameterName.join('=');
        setTimeout(function() {
            window.location.href = res;
        }, 2000);
        function redirectTo(){
            window.location.href = res;
        }
    </script>

<?php //get_footer(); ?>

</body>

</html>