<style>
    :root {
        --text-color : #fff;
        --text-color-b: #000;
        --color-blue: #437CBF;
    }
      #notfound {
         position: relative;
         height: 65vh;
      }

      #notfound .notfound {
         position: absolute;
         left: 50%;
         top: 50%;
         -webkit-transform: translate(-50%, -50%);
         -ms-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
      }

      .notfound {
         max-width: 520px;
         width: 100%;
         text-align: center;
         line-height: 1.4;
      }

      .notfound .notfound-404 {
         height: 190px;
      }

      .notfound .notfound-404 h1 {
         font-size: 146px;
         font-weight: 700;
         margin: 0px;
         color: var(--text-color-b);
      }

      .notfound .notfound-404 h1>span {
         display: inline-block;
         width: 120px;
         height: 120px;
         background-image: url('http://localhost/CoolNLite/shared/img/emoji2.gif');
         background-size: cover;
         -webkit-transform: scale(1.4);
         -ms-transform: scale(1.4);
         transform: scale(1.4);
         z-index: -1;
      }

      .notfound h2 {
         font-size: 22px;
         font-weight: 700;
         margin: 0;
         text-transform: uppercase;
         color: var(--text-color-b);
      }

      .notfound p {
         color: #000;
         font-weight: 300;
         font-size: 16px;
         margin-bottom: 1em;
      }

      .notfound a {
         display: inline-block;
         padding: 12px 30px;
         font-weight: 700;
         font-size: 16px;
         background-color: var(--color-blue);
         color: var(--text-color);
         border-radius: 40px;
         text-decoration: none;
         -webkit-transition: 0.2s all;
         transition: 0.2s all;
      }

      .notfound a:hover {
         opacity: 0.8;
      }

   </style>
<div style="width: 94%; margin : 0 auto">
    <div class="row">
        <div class="col-xl-12">
        <div id="notfound">
                <div class="notfound">
                    <div class="notfound-404">
                    <h1>0<span></span>0</h1>
                    </div>
                    <h2>Oops! Bạn không có đủ để quyền truy cập</h2>
                    <p>
                        Xin vui lòng liên hệ quản trị viên để biết thêm chi tiết
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

