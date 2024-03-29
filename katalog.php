<?
include "header.php";
?>
    <div class="container">

        <main>


            <div class="blocks_3d">
                <h2 class='mob-none'>Чороон</h2>
                <div class="el_block_3d">
                    <canvas class="canvas" onselectstart="return false" onmousedown="return false "></canvas>
                </div>
                <div class="info_3d">
                    <h2 class='d-none d-md-block'>Чороон</h2>
                    <!-- полная версия -->
                    <div class='d-none d-md-block'>
                    <p>Чороон – сакральный сосуд, один из ключевых символов якутской культуры, постоянный атрибут
                        многочисленных ритуалов и праздников. Каждый чороон хранит в себе свет души и тепло рук своего
                        мастера,это символ благополучия и изобилия.</p> 
                    <p>Новый век диктует свои тенденции в национальных традициях любого народа, что приобретают все
                        большую популярность и актуальность.</p>
                    </div>
                    <!-- мобильная версия -->
                    <div class='mob-none'>
                    <details>
                    <summary>Подробнее</summary>    
                    <p>Чороон – сакральный сосуд, один из ключевых символов якутской культуры, постоянный атрибут
                        многочисленных ритуалов и праздников. Каждый чороон хранит в себе свет души и тепло рук своего
                        мастера,это символ благополучия и изобилия.</p> 
                    <p>Новый век диктует свои тенденции в национальных традициях любого народа, что приобретают все
                        большую популярность и актуальность.</p></details>
                    </div>
                </div>
            </div>


            <div class="blocks_3d">
                <div class="info_3d">
                    <h2>Табакерка</h2>
                   
                    <!-- полная версия -->
                    <div class='d-none d-md-block'>
                    <p>Табакерка - это небольшой сосуд для хранения табака, обычно изготовленный из металла, камня, кости или дерева. 
                        В прошлом табакерки были широко распространены как аксессуар для хранения и употребления табака. 
                        Они часто использовались в качестве подарков и имели декоративное значение.</p> 
                    <p>Может быть с одним или с несколькими отделениями для хранения табака разных сортов.</p>
                    </div>
                    
                     
                </div>
                <div class="el_block_3d">
                    <canvas class="canvas1" onselectstart="return false" onmousedown="return false"></canvas>
                </div>
                <!-- мобильная версия -->
                <div class='mob-none'>
                    <details> 
                    <summary>Подробнее</summary>    
                    <p>Табакерка - это небольшой сосуд для хранения табака, обычно изготовленный из металла, камня, кости или дерева. 
                        В прошлом табакерки были широко распространены как аксессуар для хранения и употребления табака. 
                        Они часто использовались в качестве подарков и имели декоративное значение.</p> 
                    <p>Может быть с одним или с несколькими отделениями для хранения табака разных сортов.</p></details>
                    </div>
               
            </div>


            <div class="blocks_3d">
            <h2 class='mob-none'>Доска</h2>
                <div class="el_block_3d">
                    <canvas class="canvas2" onselectstart="return false" onmousedown="return false"></canvas>
                </div>
                <div class="info_3d">
                    <h2 class='d-none d-md-block'>Доска</h2>
                    <!-- полная версия -->
                    <div class='d-none d-md-block'>
                    <p>Разделочные доски народа өлөөн являются не только функциональными предметами, но и произведениями искусства. 
                        Они могут быть использованы в качестве подарка или украшения интерьера.
                         Каждая доска уникальна и может иметь свой особый стиль и значение, которое передается из поколения в поколение.
                        </p> 
                    <p>Новый век диктует свои тенденции в национальных традициях любого народа, что приобретают все
                        большую популярность и актуальность.</p>
                    </div>
                    <!-- мобильная версия -->
                    <div class='mob-none'>
                    <details>
                    <summary>Подробнее</summary>    
                    <p>Разделочные доски народа өлөөн являются не только функциональными предметами, но и произведениями искусства. 
                        Они могут быть использованы в качестве подарка или украшения интерьера.
                         Каждая доска уникальна и может иметь свой особый стиль и значение, которое передается из поколения в поколение.
                        </p> 
                    <p>Новый век диктует свои тенденции в национальных традициях любого народа, что приобретают все
                        большую популярность и актуальность.</p></details>
                    </div>
                    
                </div>
            </div>
        </main>
    </div>
    <?
include "footer.php";
?>



    <script type="importmap">
        {
            "imports": {
                "three": "https://unpkg.com/three@0.139.0/build/three.module.js",
                "OrbitControls": "https://unpkg.com/three@0.139.0/examples/jsm/controls/OrbitControls.js",
                "FBXLoader": "https://unpkg.com/three@0.139.0/examples/jsm/loaders/FBXLoader.js"
            }
        }
    </script>
    <script type="module" src="js.js"></script>
    <script type="module" src="js2.js"></script>
    <script type="module" src="js3.js"></script>

</body>

</html>