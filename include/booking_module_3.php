<section class="booking-module">
    <div class="container-fluid">
        <div class="row">
            <div id="tl-search-form3" class="tl-container-main"></div>
        </div>
    </div>
</section>

<style>
    .block-search-main {
        background-color: #89C43E;
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.15);
        width: 100%;
        box-sizing: border-box;
        z-index: 9;
    }
    .tl-container-main {
        padding: 0 25px;
        max-width: 1120px;
        margin: 0 auto;
        width: 100%;
    }
    .booking-module {
        background-color: #89C43E;
    }
</style>

<script type="text/javascript">
    (function(w) {
        var q = [
            ['setContext', 'TL-INT-berezka18-ru', 'ru'],
            ['embed', 'search-form', {
                container: 'tl-search-form3'
            }]
        ];
        var t = w.travelline = (w.travelline || {}),
            ti = t.integration = (t.integration || {});
        ti.__cq = ti.__cq ? ti.__cq.concat(q) : q;
        if (!ti.__loader) {
            ti.__loader = true;
            var d = w.document,
                p = d.location.protocol,
                s = d.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = (p == 'https:' ? p : 'http:') + '//ibe.tlintegration.com/integration/loader.js';
            (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s);
        }
    })(window);
</script>