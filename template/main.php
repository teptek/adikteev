<div class="main">
    <h5>Responsive apps</h5>
    <h2>monapp1<span class="arrow"></span></h2>
    <div class="content">
        <ul class="nav nav-tabs" id="app-menu" role="tablist">
            <li role="presentation"><a role="tab" data-toggle="tab">Habillage</a></li>
            <li role="presentation" class="active"><a role="tab" data-toggle="tab">Milieu de page</a></li>
            <li role="presentation"><a role="tab" data-toggle="tab">Milieu de page Mobile</a></li>
            <li role="presentation"><a role="tab" data-toggle="tab">Overlay Mobile</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="middle">
                <h4 class="tabtitle">> Gérer vos formats publicitaires</h4>
                <a class="btn btn-ico" id="config-btn" href="#config"><i class="fa fa-cog"></i>Intégration</a>
                <div class="middle-content row-fluid">
                    <div class="mcontent">
                        <div class="format-img"></div>
                        <a href="http://demo.adikteev.com/M-Content" target="_blank" class="format-content">
                            <h4>M-Content</h4><span><i class="fa fa-eye"></i>Afficher l'aperçu</span>
                            <p>
                                Insertion dans votre contenu rédactionnel
                            </p>
                        </a>
                        <div class="format-action">
                            <div class="radio-btn"></div>
                        </div>
                    </div>
                    <div class="mstory">
                        <div class="format-img"></div>
                        <a class="format-content">
                            <h4>M-Story Web</h4><span><i class="fa fa-eye"></i>Afficher l'aperçu</span>
                            <p>
                                Insertion avec parallax dans votre contenu rédactionnel
                            </p>
                        </a>
                        <div class="format-action">
                            <div class="radio-btn"></div>
                        </div>
                    </div>
                    <div class="mstory-max">
                        <div class="format-img"></div>
                        <a class="format-content">
                            <h4>M-Story Max Web</h4><span><i class="fa fa-eye"></i>Afficher l'aperçu</span>
                            <p>
                                Insertion MAX avec parallax dans votre contenu rédactionnel
                            </p>
                        </a>
                        <div class="format-action">
                            <div class="radio-btn"></div>
                        </div>
                    </div>
                    <div class="mstory-play">
                        <div class="format-img"></div>
                        <a class="format-content">
                            <h4>M-Story Play Web</h4><span><i class="fa fa-eye"></i>Afficher l'aperçu</span>
                            <p>
                                Insertion d'une vidéo avec parallax dans votre contenu rédactionnel
                            </p>
                        </a>
                        <div class="format-action">
                            <div class="radio-btn"></div>
                        </div>
                    </div>
                </div>
                <div id="config" class="row-fluid">
                    <h2>Instructions</h2>
                    <div class="row-fluid">
                        <h4>Tag à intégrer</h4>
                        <p>
                            Voici les instructions pour activer Adikteev sur votre site '<strong>monapp1 (Responsive)</strong>':<br><br>
                            Insérer le tag suivant <strong>à l'endroit précis</strong> où vous voulez insérer le format dans votre page :<br>
                            <span class="txt-green">En tant que premier élément de votre colonne à habiller</span><br><br>
                        </p>
                    <pre><code class="html hljs xml"><span class="hljs-tag"><span class="hljs-tag">&lt;</span><span class="hljs-name"><span class="hljs-tag"><span class="hljs-name">div</span></span></span><span class="hljs-tag"> </span><span class="hljs-attr"><span class="hljs-tag"><span class="hljs-attr">id</span></span></span><span class="hljs-tag">=</span><span class="hljs-string"><span class="hljs-tag"><span class="hljs-string">'akv-overlay'</span></span></span><span class="hljs-tag">&gt;</span></span><span class="hljs-tag"><span class="hljs-tag">&lt;/</span><span class="hljs-name"><span class="hljs-tag"><span class="hljs-name">div</span></span></span><span class="hljs-tag">&gt;</span></span><span class="hljs-tag"><span class="hljs-tag">&lt;</span><span class="hljs-name"><span class="hljs-tag"><span class="hljs-name">script</span></span></span><span class="hljs-tag"> </span><span class="hljs-attr"><span class="hljs-tag"><span class="hljs-attr">type</span></span></span><span class="hljs-tag">=</span><span class="hljs-string"><span class="hljs-tag"><span class="hljs-string">'text/javascript'</span></span></span><span class="hljs-tag">&gt;</span></span><span class="javascript"><span class="javascript">
(</span><span class="hljs-function"><span class="hljs-keyword"><span class="javascript"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span></span><span class="javascript"><span class="hljs-function">(</span></span><span class="hljs-params"></span><span class="javascript"><span class="hljs-function"><span class="hljs-params"></span>)</span></span></span><span class="javascript">{
p=</span><span class="hljs-function"><span class="hljs-keyword"><span class="javascript"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span></span><span class="javascript"><span class="hljs-function">(</span></span><span class="hljs-params"><span class="javascript"><span class="hljs-function"><span class="hljs-params">e,t</span></span></span></span><span class="javascript"><span class="hljs-function">)</span></span></span><span class="javascript">{
t=t||{};</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">var</span></span></span><span class="javascript"> n=</span><span class="hljs-built_in"><span class="javascript"><span class="hljs-built_in">document</span></span></span><span class="javascript">.createElement(</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'script'</span></span></span><span class="javascript">);
</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">var</span></span></span><span class="javascript"> r=</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'https:'</span></span></span><span class="javascript">==</span><span class="hljs-built_in"><span class="javascript"><span class="hljs-built_in">window</span></span></span><span class="javascript">.location.protocol?</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'https://'</span></span></span><span class="javascript">:</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'http://'</span></span></span><span class="javascript">;
n.setAttribute(</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'data-cfasync'</span></span></span><span class="javascript">,</span><span class="hljs-literal"><span class="javascript"><span class="hljs-literal">false</span></span></span><span class="javascript">);
n.src=r+</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'cdn.adikteev.com/lib/v3/aksdk.moment?t='</span></span></span><span class="javascript">+((</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">new</span></span></span><span class="javascript"> </span><span class="hljs-built_in"><span class="javascript"><span class="hljs-built_in">Date</span></span></span><span class="javascript">).getTime()/</span><span class="hljs-number"><span class="javascript"><span class="hljs-number">1e3</span></span></span><span class="javascript">/</span><span class="hljs-number"><span class="javascript"><span class="hljs-number">3600</span></span></span><span class="javascript">).toFixed();
n.type=</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'text/javascript'</span></span></span><span class="javascript">;n.async=</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'true'</span></span></span><span class="javascript">;
n.onload=n.onreadystatechange=</span><span class="hljs-function"><span class="hljs-keyword"><span class="javascript"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span></span><span class="javascript"><span class="hljs-function">(</span></span><span class="hljs-params"></span><span class="javascript"><span class="hljs-function"><span class="hljs-params"></span>)</span></span></span><span class="javascript">{
</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">var</span></span></span><span class="javascript"> n=</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">this</span></span></span><span class="javascript">.readyState;</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">if</span></span></span><span class="javascript">(n&amp;&amp;n!=</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'complete'</span></span></span><span class="javascript">&amp;&amp;n!=</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'loaded'</span></span></span><span class="javascript">)</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">return</span></span></span><span class="javascript">;
</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">try</span></span></span><span class="javascript">{top.AKSdk.init(e,t);top.AKSdk.call_action(</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'default_read_article'</span></span></span><span class="javascript"> ); }</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">catch</span></span></span><span class="javascript">(r){}
};
</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">try</span></span></span><span class="javascript">{ </span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">var</span></span></span><span class="javascript"> i=top.document.getElementsByTagName(</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'script'</span></span></span><span class="javascript">)[</span><span class="hljs-number"><span class="javascript"><span class="hljs-number">0</span></span></span><span class="javascript">];i.parentNode.insertBefore(n,i); }</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">catch</span></span></span><span class="javascript">(e){};
};
p({</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"desktop"</span></span></span><span class="javascript">:</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"XZx2ua0-vHUVcuA2WzHiJtSVGLXRweoonXGhIJUzAyw="</span></span></span><span class="javascript">,</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"mobile"</span></span></span><span class="javascript">:</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"XZx2ua0-vHUVcuA2WzHiJtSVGLXRweoonXGhIJUzAyw="</span></span></span><span class="javascript">},{});
})()
</span></span><span class="hljs-tag"><span class="hljs-tag">&lt;/</span><span class="hljs-name"><span class="hljs-tag"><span class="hljs-name">script</span></span></span><span class="hljs-tag">&gt;</span></span></code></pre>
                    </div>
                    <div class="row-fluid">
                        <h4>Tag de test</h4>
                        <p>
                            Vous pouvez tester votre insertion avec le <span class="txt-green">tag de TEST</span> suivant :<br><br>
                        </p>
                    <pre><code class="html hljs xml"><span class="hljs-tag"><span class="hljs-tag">&lt;</span><span class="hljs-name"><span class="hljs-tag"><span class="hljs-name">div</span></span></span><span class="hljs-tag"> </span><span class="hljs-attr"><span class="hljs-tag"><span class="hljs-attr">id</span></span></span><span class="hljs-tag">=</span><span class="hljs-string"><span class="hljs-tag"><span class="hljs-string">'akv-overlay'</span></span></span><span class="hljs-tag">&gt;</span></span><span class="hljs-tag"><span class="hljs-tag">&lt;/</span><span class="hljs-name"><span class="hljs-tag"><span class="hljs-name">div</span></span></span><span class="hljs-tag">&gt;</span></span><span class="hljs-tag"><span class="hljs-tag">&lt;</span><span class="hljs-name"><span class="hljs-tag"><span class="hljs-name">script</span></span></span><span class="hljs-tag"> </span><span class="hljs-attr"><span class="hljs-tag"><span class="hljs-attr">type</span></span></span><span class="hljs-tag">=</span><span class="hljs-string"><span class="hljs-tag"><span class="hljs-string">'text/javascript'</span></span></span><span class="hljs-tag">&gt;</span></span><span class="javascript"><span class="javascript">
(</span><span class="hljs-function"><span class="hljs-keyword"><span class="javascript"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span></span><span class="javascript"><span class="hljs-function">(</span></span><span class="hljs-params"></span><span class="javascript"><span class="hljs-function"><span class="hljs-params"></span>)</span></span></span><span class="javascript">{
p=</span><span class="hljs-function"><span class="hljs-keyword"><span class="javascript"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span></span><span class="javascript"><span class="hljs-function">(</span></span><span class="hljs-params"><span class="javascript"><span class="hljs-function"><span class="hljs-params">e,t</span></span></span></span><span class="javascript"><span class="hljs-function">)</span></span></span><span class="javascript">{
t=t||{};</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">var</span></span></span><span class="javascript"> n=</span><span class="hljs-built_in"><span class="javascript"><span class="hljs-built_in">document</span></span></span><span class="javascript">.createElement(</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'script'</span></span></span><span class="javascript">);
</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">var</span></span></span><span class="javascript"> r=</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'https:'</span></span></span><span class="javascript">==</span><span class="hljs-built_in"><span class="javascript"><span class="hljs-built_in">window</span></span></span><span class="javascript">.location.protocol?</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'https://'</span></span></span><span class="javascript">:</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'http://'</span></span></span><span class="javascript">;
n.setAttribute(</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'data-cfasync'</span></span></span><span class="javascript">,</span><span class="hljs-literal"><span class="javascript"><span class="hljs-literal">false</span></span></span><span class="javascript">);
n.src=r+</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'cdn.adikteev.com/lib/v3/aksdk.moment?t='</span></span></span><span class="javascript">+((</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">new</span></span></span><span class="javascript"> </span><span class="hljs-built_in"><span class="javascript"><span class="hljs-built_in">Date</span></span></span><span class="javascript">).getTime()/</span><span class="hljs-number"><span class="javascript"><span class="hljs-number">1e3</span></span></span><span class="javascript">/</span><span class="hljs-number"><span class="javascript"><span class="hljs-number">3600</span></span></span><span class="javascript">).toFixed();
n.type=</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'text/javascript'</span></span></span><span class="javascript">;n.async=</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'true'</span></span></span><span class="javascript">;
n.onload=n.onreadystatechange=</span><span class="hljs-function"><span class="hljs-keyword"><span class="javascript"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span></span><span class="javascript"><span class="hljs-function">(</span></span><span class="hljs-params"></span><span class="javascript"><span class="hljs-function"><span class="hljs-params"></span>)</span></span></span><span class="javascript">{
</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">var</span></span></span><span class="javascript"> n=</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">this</span></span></span><span class="javascript">.readyState;</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">if</span></span></span><span class="javascript">(n&amp;&amp;n!=</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'complete'</span></span></span><span class="javascript">&amp;&amp;n!=</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'loaded'</span></span></span><span class="javascript">)</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">return</span></span></span><span class="javascript">;
</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">try</span></span></span><span class="javascript">{top.AKSdk.init(e,t);top.AKSdk.call_action(</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'default_read_article'</span></span></span><span class="javascript"> , {</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"format"</span></span></span><span class="javascript">:</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"M-Suit"</span></span></span><span class="javascript">,</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"campaign"</span></span></span><span class="javascript">:</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"test web FR"</span></span></span><span class="javascript">}); }</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">catch</span></span></span><span class="javascript">(r){}
};
</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">try</span></span></span><span class="javascript">{ </span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">var</span></span></span><span class="javascript"> i=top.document.getElementsByTagName(</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">'script'</span></span></span><span class="javascript">)[</span><span class="hljs-number"><span class="javascript"><span class="hljs-number">0</span></span></span><span class="javascript">];i.parentNode.insertBefore(n,i); }</span><span class="hljs-keyword"><span class="javascript"><span class="hljs-keyword">catch</span></span></span><span class="javascript">(e){};
};
p({</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"desktop"</span></span></span><span class="javascript">:</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"XZx2ua0-vHUVcuA2WzHiJtSVGLXRweoonXGhIJUzAyw="</span></span></span><span class="javascript">,</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"mobile"</span></span></span><span class="javascript">:</span><span class="hljs-string"><span class="javascript"><span class="hljs-string">"XZx2ua0-vHUVcuA2WzHiJtSVGLXRweoonXGhIJUzAyw="</span></span></span><span class="javascript">},{});
})()
</span></span><span class="hljs-tag"><span class="hljs-tag">&lt;/</span><span class="hljs-name"><span class="hljs-tag"><span class="hljs-name">script</span></span></span><span class="hljs-tag">&gt;</span></span></code></pre>
                    </div>
                    <div class="row-fluid">
                        <h4>
                            Enregistrer un Passback
                        </h4>
                        <p>
                            Ce doit être un tag HTML commençant par &lsaquo;div&rsaquo; ou &lsaquo;script&rsaquo;
                        </p>
                        <textarea></textarea>
                        <a class="btn green">Sauvegarder le Passback</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>