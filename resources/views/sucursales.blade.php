@extends('plantilla')
@section('titulo')
Sucursales
@endsection
@section('contenido')
<div class="sec__inicio">
    <h1 class="sec__inicio__h1">Sucursales</h1>
    <div class="articulos_todos">


    <div class="container__sucursales">
      <div class="articulos">
        <div class="containers__img">
          <img
            class="sucursales__img"
            src="https://play-lh.googleusercontent.com/aIXADeaCLGozD3YhT43_xGEhF7YdzMjWERdYHNMMZbFvxrS1_dMgzsYN7OtQozMPKdUN"
            alt=""
          />
        </div>
        <div class="container__texto">
          <h3 class="container__texto__h2s">"La campeona de los precios bajos"</h3>

          <div class="container__texto__onainer__boton">

            <button class="container__texto__button ">
              Bodega ahorrera
            </button>
          </div>
        </div>
      </div>
    </div>


    <div class="container__sucursales">
      <div class="articulos">
        <div class="containers__img">
          <img
            class="sucursales__img"
            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAzFBMVEX///8ALHMASpcAdMiCvAAADGh+i6wADWgAKnKCjq4AHm18iasAIm8AG2wAKHEAd8wAJXDa3ucAAGaIwwAAIG4AXKoARZsAQJ0AFGoAHG0AHHcAE2p4gqQAF3hdjzsASpUlX4SkrMJBbVKYo70ABWdhcZtGfGrR1uIAE3kAUZ/Hzdru8fXj5u2+xdVYiD+LlrSvtspWZ5RBVooAZ7gUNnkxSYM/VImTnLdupCUlQX5seqBZapYLMndNX5BOfEggW4dFcVAwa4EAPocsVF9kYkmdAAAPlUlEQVR4nO2dfZ+iOBLHZWdoEIFB1rnF0b1bT3rdFTzpPh9WR2/v4f2/p6OSAIEECAgKfrr+mREQ8uWXVKUqSA8GH/ZhH/ZhT2fBoxvQtg3dl0c3oV17kSV59OhGtGlDWZIk5YlVfAHAEPFpVRxiwOdV8SUCfFYVhwmgJMlPqGIK8BlVzABKTxc0GMBnczcvLOBzqchR8LlU5Cr4TO4mR8HnUTFXwWdRsUBB5G56r2IJYP9VLAXse9AQAOy3uyl0Ms+gopCCfVZRUEGE2EsVhRXsq4oVFOyniqyCaurDJLu7b6GfBTR/pxBN/V/f+q0iB/Drl3+a8YfpHz/+9WdGxR4hvigcwE8xovntjx8/cxD7425GPAU/fYoQQcHPn3mIfVGRVdBCgARR/YYAAfG3fqo44nbRTxFiDMhVsQ/uJl9BjGjFgD1VsUhBhPhLAthLFdmZTBrw0+9/+eVzMWK3Q3+Zgp9+/+GHUsQuq5gXJmhAAcTuBg1+oKfGIAIExLKx2NGOKqZgj1UsDhOJgjwVexE0RJwMjdg7d1OmYBqQRey8itUU7KGK5YE+CyjibjqkYnUFe6aieJioqmJHEMsCfR5gb0J/XQV7o2LVMFGsYgeDRj0n0yN3c5uCPMSOqXirgp1XsU6gr4H4uNDfhIKdVvGWMFFVxYcg1g/0PMQOhn5WQbU2YIj4Z1rF6eNVZBWU1L+lCL9WIfzp1xThv3Xm7PdWkXUy0EtTiF8qIP70a6qX/p1ZXJTu7W44Ct6CKAJ4XxW5CtZHFAO8p4oFDyHUQRQFvF/oz1WwHqI44L1UZMPETYhVAO8TNHKcTF3EaoD3cDclClZFrArYvoqlClZDrA7YtoqFTqY6Yh3Adt2NkILiiPUA21RRUEFRxLqA7alY6WnDcsT6gG2F/goKiiDeAtiOigJhogribYBtBA1hJyOGeCtg8+6msoLFiLcDNq1iDQWLEJsAbFbFik6mDLEZwCbdTU0F8xCbAmxOxdoK8hGbA2xKxYo/KyhDbBKwmdB/k4IcxP80CdiEirwwoeqGIsuyYkxMdmcx4pev3/7xY4OAtwcNjpOxFH0erMb+eBXML7IGv6JQLUsM8ctXU/o5RmwC8FZ3w1l8ca9r6oDxcOJYlnG9qryLZxEBUJJ+I4jNAN6mIqugbmE+PxjOR8cN/De47sN/pwKIGFAiKjYFeIuKrJOZvqMdq4PtaJPJdGbPPXyoZxc3AhC/fI36MqjYHGB9d8MqOLniHXY87DQDazouCykh4tfEL4UqNghYV0XOCu8O7ZjTO1QbIa5KY4r5X9rxfvtfk4D1VOQEensMOzbpDqka0FHXs9JGpAdqofOtYdVDPyfQ63O0Z5fxKZOzGGHLVlVFXqC3fdizYvbA9o1zD4pCqxY0eNmEdUC7jswC9HTbCcJK7oab0RtLtO+VWYBWd90grKAiPx9UVmjnG+sjXK89QlULTdQtiaqYk03YXo6G0mzdGqG62w6HW85d5ZuYu8nL6GW8e8uMQ8lYtEZofYdr7oVyGDARFfPyQXWG969cZpf5PvzedHwjhiLUpkKKWq5ifkZvkyP2LIw5aQlQmh4rSSiVh/6CjN718SG+W5hGNGtGEM4m2F5TZMUqFhV+Z1FeODZYZ5M1VbV0q8qtL7joIeogqmqK3NyioFFYNkQdBpl3tQsbb04VZXd9/b43ZCNpkmpaujY1HGemxHfI1DVNz7QabYvOr4wHKzwPthxZP+1msgE/By8mzXc3xaV7klkgW+/d3JGnznbHMTnOX6patFk9XM8v22WwWY/PCFE13NN5uz3vqHOZeNt87+IXZ4Qh6gp7Tfe6QdHKX+xdR9pfChHzVCwr/Mp0+WL9bk+4V9EnMHSGr68j/NbnMzmr/pp8eR4SmspuQdLn8TuJNZZ7irb5ZzT6lMEYJLRwaWG8hlu3OnqD92LXxlextGxIJqaR+fOZwTJCFWAsyZquTxx8S14MtMN8Xy4XgUcIVWW/oc61hWuHOq2obQsZhH85hL3SOsH3tq6ryPYZ7ZRKBiTP3QiU7mfL9Fe8pTXLXEmHModDbrCJsxHi7M2pYbgYay7rmdd6jwzVOa3T2+YaFC7hyw4A7rHQUwk+ZK/LIjIqChV+7XX2a8EudS11OqADtIYyynVyaof0XBTHR4fT+0s0Yi/2Em17Px1G0TaFnNpZgILRrEk/iBAyKoq+lYtBHAQ6NY0zoC2bOBsmzkmLm2NgQm/gbaeziWVamk36xdoPt+mKhrYRrz0nr+kx4EMy6t11Al/U1pSKgWBQVe0FgziYJ2UNF3oQVbPB86Bz/EIhg3x9OYurj3Y09pbJsCZ9hRQOUBHBTy4CPkuAUHJTI0H4tVXyd49B3ER9xjzBRz85F85HFkb0mcTUOXVDLVy/G7xTw8TCRUvPTW4LXcybiWk4rNVNwzuY9Tdw+alJtdZLToU0pYo4UA4Y4GiRuQuD1NydbDuh06LJFF2QDfeWj0N2fir+8jFjeszqOMZzVVVNA5GWjhPXwyFUcJecT9htKNiT6eJ78h39dV46088qWEnFcDKizMfpLy/IkAmHyHiXTOnwOEx6mDZkCYn3GWr0tgV1HHbA/oxCLJ0Y8zOMCq+QU3X7sEl9mQQ93Z3K1JwVE/qFhKTnpjJrMl63GvWlcDYsnKPxFKymogSLbBfar3KTfNURIJzgMuySJpzgYIbreuaFXCN3psgA5k69K70IUDKdCxUeeVmjOUW7inupjudhSyN32yzuLuOzzBZRWMAcBasjhuExmThkqkWmbii2iSNBEiC5hHhKvjDYbYRQNZMWelunjLEIsDKiNIszBqpSrIa53G4exM6omNB6KyOUrD3dxhe7OHUqBCxEVHknlqPoGEQD0TTk75BD+MHL+64ZQknf+VQbx0XrOmWABe7GchwOokqCcxwFHQlSvNXcdB1N36d25RBeywnDzGpLtdHb5dYYRNagclSEYM0LQ6TYT4SyUB6w2cmoNkFmX4mfrU0YxmBjm8wzcqth5QrmqwiNO3FuHaHAhJM9tOI1KuOQxgcNEEJmJr/GGXJqfkABCpb1uSpC4zgV/djRgVAodRu8xe0iQyww6JPUJUTzjD1h9LnPDYgpmKciNC5zRbJjELVGtRBPkjjgmjzV+NsI4WCbjMcLpztVWQfmqAiNG3PSSFXHXznrZAJ5SBwdE+qq+lIcgWZ0ruTiCd2VdafiCvIRUeMsdoBHRUZNJSsbVP9hpODlFlxCPKfBMdZZjelAhZ03O2CqAXIQESFn4Yk0ZiVH2WERIS8/ZLpyllAO+wXVJ3FPYZaCqgKyiIjQY720jCeNYSclzaIJs1POKMcvnbXh2Ti+obKX+gK+S9mCaXVAxt3gITTMjn3SSX03bioVUhhCEjxT2S45KEWoYZ+Bs6eQMKAyF0yYeZd0vedM0yoSJ7HL3DtSSIJbauKK8SIpuChZeUhmOyojJFoPI8KBnPQdlGlkngipoyBYSkXiJHwjhUhqb0c0L8NVmQGp0ZtTm9zYpPEOJ58nPTJFGOX4k4jwJd6rKrDnnHI09Z8UplWMlp68Uzw9VTUZtzjAY88ghwxn8kyxT0dvgPPHIPb2Ch60W3pJysAZ2ILqiKpCKscx4eBCbqxqw65xKuDXVRCMUtGIS2zHqTLVdX06s89YtKMdNSzKAFbrdbjLe8Mz79VlZsum6drOBffpQJJt3O80WzlhvQLTtrG0sm2Rqct8arumOoOreLuZZaphv0BHp2betz3rnagIHcwjBOvj/Dw/kszbuyY17gm1tOIN3WmS13n7fbpA50NBQjvSmzzkWZTUcWEaQaYUwfUi7dHs2zvRI+UWBVOIRuAvbVsaZer6/oheSVTtM2b0gzc3nAPs/DExf7+P/49NR4T0Rh8RzlLH+SfrNPCO9FUXRpOANCKUSMyJor0uxvg2e+vjwdXSEVJXnN3pYsh4/UmFJ96xmaacMjw2tdQ23EuV1LawP+4sQzHOQXhVz9+86Kk09XZANvSruiOHI2onKfZsypn/qqYptNwubuh0UPexbdlJ39EmAPmZBjw0cMdHMvKsqd+SVi1P3c2aURCsQqlY1aAz2XISkR1ZzsyDDJnstmSZioJkTDrRV3XHcQqr3E3+GlhYxclkuwI3NI4nHc7G99O1VGPh+2gqbb36Pl3D8cHGmzMJla/rzeqtYIWiOQXBBFV04vJpPFeW/WwyBxNLFBegnp9UGpMpxRr8rHlYnRff/duqalVMSMUpmkRvhi9LPy4Qy2Me4ZBP6G/QUzOwd7p4XY+C4Zb5gzTReRtVUBARLaH4F0XTDPkSt6QKYWDP4HENKLBqy/lmGBxHOd20eUARRJQRZH/kVY3QQc9vAKF68c/u0M+RsA1AAUSooCyzq2zVCF0FnlJAo9Q6bTabnGHYDmCpu0FVtwNTP6k2DiEnWeNVetNxjBzA1l79UayiCZmElp3pVCJEtsx/KpCcsiUFwQpVRITMlLSahsHGh+yo8OHOdt/4VaQiqu8zj9XzCXPiYWA79hzXtfIBW1QQrEhF8DSb7IICS+hsSFUGqmaML5XcAX8JKDpf66/CKlARjaQ3lPGrcRNZQggqPqzjQp0uqRNiQtWC5zfyn11vW8FiRLyEsXVc2ZbeozYC4XfZofwiqo0vbdmGxiZFM9xLtQMUCXIf6roHYBEiXl0bjMNsPF5Rk+Pl/AQaIDxUKPCTQmgyL+X8euyugIWIu6igsqFn3oQwfubeiI5aJb2ZItzmnf9egEXuxlR2o2CzCbbxWop+HmLbnmK5VPmwDI9aXunnp6wrOmz0ZuQqeMfXexa4G3NihINOoxYvNGL02LKmMDLTkcVCR+X//OZ+CoLd+DqQOnbvt3rfvXZzXwXB7qziI97LflcV76/gnREfA3hHxEcB3g3xcYB3cjeP/btPd1DxkQqCta7i4/9yV8sqPlpBsFZVfLyCYC2q2AUFwVpD7Apga4jdAWwJsUuArbibbjiZxBpXsVsKgjWsYtcUBGtUxe4pCNagil1UEKwxFbupIFhDiN0FbAixy4CNIHYbsAF301Unk9iNKnZdQbCbVOy+gmA3qNgHBcFqq9gPBcFqqqj0REGwWoj9URCsBuKj/zx1VauM2C8FwSq6m74pCFZJxcf/kfg6VkHFPioIJqxiPxUEE30LXE8VBBNSsb8Kggkg9llBsFLEvjqZxEoQ+xfoWSt0N/1XEKxAxX47mcRyVXwOBcFyVHwWBcG4KvY9TKSNo+IzKQjGID6XgmAZxOdxMomlEJ8h0LNGuZtnVBAsVvHZnExiRMVnVRAMqfi8CoKFKj5fmEjb0H1qBcGC8kM+7MM+7MP6Zv8HKICYJ3mRpYoAAAAASUVORK5CYII="
            alt=""
          />
        </div>
        <div class="container__texto">
          <h3 class="container__texto__h2s">“Los mejores productos para seguir adelante”</h3>

          <div class="container__texto__onainer__boton">

            <button class="container__texto__button ">
              Sam´s Club
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="container__sucursales">
      <div class="articulos">
        <div class="containers__img">
          <img
            class="sucursales__img"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/LogoSorianaSVG.svg/1200px-LogoSorianaSVG.svg.png"
            alt=""
          />
        </div>
        <div class="container__texto">
          <h3 class="container__texto__h2s">“Y tú vas al super o a la Comer”.</h3>

          <div class="container__texto__onainer__boton">

            <button class="container__texto__button ">
              Soriana
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="container__sucursales">
      <div class="articulos">
        <div class="containers__img">
          <img
            class="sucursales__img"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl10FWXVb-87Fuu_GbUcChVYpLyFUMOel0xA&usqp=CAU"
            alt=""
          />
        </div>
        <div class="container__texto">
          <h3 class="container__texto__h2s">“En chedrahui cuesta menos”.</h3>

          <div class="container__texto__onainer__boton">

            <button class="container__texto__button ">
              Chedraui
            </button>
          </div>
        </div>
      </div>
    </div>


    <div class="container__sucursales">
      <div class="articulos">
        <div class="containers__img">
          <img
            class="sucursales__img"
            src="http://www.loscabosguide.com/wp-content/uploads/2017/04/city-club-logo-cabo-san-lucas.jpg"
            alt=""
          />
        </div>
        <div class="container__texto">
          <h3 class="container__texto__h2s">“Las Mejores Ofertas a Precios Más Bajos”.</h3>

          <div class="container__texto__onainer__boton">

            <button class="container__texto__button ">
            City club
            </button>
          </div>
        </div>
      </div>
    </div>


    <div class="container__sucursales">
      <div class="articulos">
        <div class="containers__img">
          <img
            class="sucursales__img"
            src="https://imagenes.milenio.com/E05B-Y5DLJfmXPrqaUiU_sWNnFM=/958x596/https://www.milenio.com/uploads/media/2017/09/25/farmacia-yza-del-grupo-femsa.jpg"
            alt=""
          />
        </div>
        <div class="container__texto">
          <h3 class="container__texto__h2s">“Mejorar la salud, la vitalidad y el bienestar ”.</h3>

          <div class="container__texto__onainer__boton">

            <button class="container__texto__button ">
              Farmacias Yza
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="container__sucursales">
      <div class="articulos">
        <div class="containers__img">
          <img
            class="sucursales__img"
            src="https://ii.ct-stc.com/2/logos/empresas/2017/08/09/farmacias-de-similares-sa-de-cv-E28379EF56F5EAE7175431thumbnail.png"
            alt=""
          />
        </div>
        <div class="container__textos">
          <h3 class="container__texto__h2s">“Lo mismo pero más barato”.</h3>

          <div class="container__texto__onainer__boton">

            <button class="container__texto__button ">
           Similares
            </button>
          </div>
        </div>
      </div>
    </div>



    <div class="container__sucursales">
      <div class="articulos">
        <div class="containers__img">
          <img
            class="sucursales__img"
            src="https://i.pinimg.com/originals/cc/02/0c/cc020cb38e5534e88b18f353a12d67fc.jpg"
            alt=""
          />
        </div>
        <div class="container__textos">
          <h3 class="container__texto__h2s">“Ahorra dinero, vive mejor”.</h3>
     
          <div class="container__texto__onainer__boton">

            <button class="container__texto__button ">
           Walmart
            </button>
          </div>
        </div>
      </div>
    </div>







    </div>
  </div>
@endsection
