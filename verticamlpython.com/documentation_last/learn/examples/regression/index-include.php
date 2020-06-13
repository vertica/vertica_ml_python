<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="Regression">Regression<a class="anchor-link" href="#Regression">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>This example will show you how to use the different methods of a Regressor. We will use the Winequality dataset.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[55]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.datasets</span> <span class="k">import</span> <span class="n">load_winequality</span>
<span class="n">winequality</span> <span class="o">=</span> <span class="n">load_winequality</span><span class="p">()</span>
<span class="nb">print</span><span class="p">(</span><span class="n">winequality</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>volatile_acidity</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>citric_acid</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>fixed_acidity</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>free_sulfur_dioxide</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>density</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>good</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>quality</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>chlorides</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>alcohol</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>color</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>pH</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>total_sulfur_dioxide</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sulphates</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>residual_sugar</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">0.3100</td><td style="border: 1px solid white;">0.020</td><td style="border: 1px solid white;">3.800</td><td style="border: 1px solid white;">20.00</td><td style="border: 1px solid white;">0.99248</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">6</td><td style="border: 1px solid white;">0.036</td><td style="border: 1px solid white;">12.4</td><td style="border: 1px solid white;">white</td><td style="border: 1px solid white;">3.750</td><td style="border: 1px solid white;">114.00</td><td style="border: 1px solid white;">0.440</td><td style="border: 1px solid white;">11.100</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">0.2250</td><td style="border: 1px solid white;">0.400</td><td style="border: 1px solid white;">3.900</td><td style="border: 1px solid white;">29.00</td><td style="border: 1px solid white;">0.989</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">8</td><td style="border: 1px solid white;">0.03</td><td style="border: 1px solid white;">12.8</td><td style="border: 1px solid white;">white</td><td style="border: 1px solid white;">3.570</td><td style="border: 1px solid white;">118.00</td><td style="border: 1px solid white;">0.360</td><td style="border: 1px solid white;">4.200</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">0.1700</td><td style="border: 1px solid white;">0.360</td><td style="border: 1px solid white;">4.200</td><td style="border: 1px solid white;">93.00</td><td style="border: 1px solid white;">0.98999</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">7</td><td style="border: 1px solid white;">0.029</td><td style="border: 1px solid white;">12.0</td><td style="border: 1px solid white;">white</td><td style="border: 1px solid white;">3.650</td><td style="border: 1px solid white;">161.00</td><td style="border: 1px solid white;">0.890</td><td style="border: 1px solid white;">1.800</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">0.2150</td><td style="border: 1px solid white;">0.230</td><td style="border: 1px solid white;">4.200</td><td style="border: 1px solid white;">64.00</td><td style="border: 1px solid white;">0.99688</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">3</td><td style="border: 1px solid white;">0.041</td><td style="border: 1px solid white;">8.0</td><td style="border: 1px solid white;">white</td><td style="border: 1px solid white;">3.420</td><td style="border: 1px solid white;">157.00</td><td style="border: 1px solid white;">0.440</td><td style="border: 1px solid white;">5.100</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">0.3200</td><td style="border: 1px solid white;">0.390</td><td style="border: 1px solid white;">4.400</td><td style="border: 1px solid white;">31.00</td><td style="border: 1px solid white;">0.98904</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">8</td><td style="border: 1px solid white;">0.03</td><td style="border: 1px solid white;">12.8</td><td style="border: 1px solid white;">white</td><td style="border: 1px solid white;">3.460</td><td style="border: 1px solid white;">127.00</td><td style="border: 1px solid white;">0.360</td><td style="border: 1px solid white;">4.300</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>&lt;object&gt;  Name: winequality, Number of rows: 6497, Number of columns: 14
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Let's create a Linear Regression to predict the Wine Quality.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[65]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.linear_model</span> <span class="k">import</span> <span class="n">LinearRegression</span>
<span class="n">model</span> <span class="o">=</span> <span class="n">LinearRegression</span><span class="p">(</span><span class="s2">&quot;public.LR_winequality&quot;</span><span class="p">)</span>
<span class="n">model</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="s2">&quot;public.winequality&quot;</span><span class="p">,</span> <span class="p">[</span><span class="s2">&quot;alcohol&quot;</span><span class="p">],</span> <span class="s2">&quot;quality&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[65]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>

=======
details
=======
predictor|coefficient|std_err |t_value |p_value 
---------+-----------+--------+--------+--------
Intercept|  2.40527  | 0.08594|27.98758| 0.00000
 alcohol |  0.32531  | 0.00814|39.97052| 0.00000


==============
regularization
==============
type| lambda 
----+--------
none| 1.00000


===========
call_string
===========
linear_reg(&#39;public.LR_winequality&#39;, &#39;public.winequality&#39;, &#39;&#34;quality&#34;&#39;, &#39;&#34;alcohol&#34;&#39;
USING PARAMETERS optimizer=&#39;newton&#39;, epsilon=0.0001, max_iterations=100, regularization=&#39;none&#39;, lambda=1, alpha=0.5)

===============
Additional Info
===============
       Name       |Value
------------------+-----
 iteration_count  |  1  
rejected_row_count|  0  
accepted_row_count|6497 </pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>By fitting the model, new model's attributes will be created. These attributes will be used to simplify the methods usage.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[66]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">X</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[66]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>[&#39;&#34;alcohol&#34;&#39;]</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[59]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">y</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[59]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&#39;&#34;quality&#34;&#39;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[60]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">input_relation</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[60]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&#39;public.winequality&#39;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[61]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">test_relation</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[61]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&#39;public.winequality&#39;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>In our case, we did not write the test relation when fitting the model. The model will then consider the train relation as test. These attributes will be used when invoking the different model abstractions. For example, let's compute the R2 of the model.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[67]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">score</span><span class="p">(</span><span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;r2&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[67]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>0.197418947221801</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>The 'score' method is using the attribute 'y' and the model prediction in the 'test_relation' to compute the R2. It is then possible to change them anytime to deploy the models on different columns. The model could also have other useful attributes. In the case of Linear Regression, the 'coef' attribute can give you useful information about the model.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[68]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">coef</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>predictor</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>coefficient</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>std_err</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>t_value</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>p_value</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">Intercept</td><td style="border: 1px solid white;">2.40526860155643</td><td style="border: 1px solid white;">0.0859405708614019</td><td style="border: 1px solid white;">27.9875799921722</td><td style="border: 1px solid white;">7.70494206960017e-163</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">alcohol</td><td style="border: 1px solid white;">0.325312038053532</td><td style="border: 1px solid white;">0.00813879966075786</td><td style="border: 1px solid white;">39.97051796496</td><td style="border: 1px solid white;">1.496509342493e-312</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[68]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Looking at the SQL code can help you understand how Vertica works.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[69]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="nb">print</span><span class="p">(</span><span class="n">model</span><span class="o">.</span><span class="n">deploySQL</span><span class="p">())</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>PREDICT_LINEAR_REG(&#34;alcohol&#34; USING PARAMETERS model_name = &#39;public.LR_winequality&#39;, match_by_pos = &#39;true&#39;)
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>The regression report is the best way to evaluate your model.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[70]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">regression_report</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>value</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>explained_variance</b></td><td style="border: 1px solid white;">0.197418947221787</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>max_error</b></td><td style="border: 1px solid white;">3.50420028103093</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>median_absolute_error</b></td><td style="border: 1px solid white;">0.495799718969066</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>mean_absolute_error</b></td><td style="border: 1px solid white;">0.618753622791325</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>mean_squared_error</b></td><td style="border: 1px solid white;">0.611933859491369</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>r2</b></td><td style="border: 1px solid white;">0.197418947221801</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[70]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>You can also add the prediction to your vDataFrame (The method 'predict' is only possible for built-in algorithms, the method 'to_vdf' is a way to replace it when the implementation is not possible). Do not forget to change the 'X' attribute if the columns names are not the same.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[71]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">predict</span><span class="p">(</span><span class="n">winequality</span><span class="p">,</span> <span class="n">name</span> <span class="o">=</span> <span class="s2">&quot;pred_quality&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>volatile_acidity</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>citric_acid</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>fixed_acidity</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>free_sulfur_dioxide</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>density</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>good</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>quality</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>chlorides</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>alcohol</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>color</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>pH</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>total_sulfur_dioxide</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>sulphates</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>residual_sugar</b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>pred_quality</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">0.3100</td><td style="border: 1px solid white;">0.020</td><td style="border: 1px solid white;">3.800</td><td style="border: 1px solid white;">20.00</td><td style="border: 1px solid white;">0.99248</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">6</td><td style="border: 1px solid white;">0.036</td><td style="border: 1px solid white;">12.4</td><td style="border: 1px solid white;">white</td><td style="border: 1px solid white;">3.750</td><td style="border: 1px solid white;">114.00</td><td style="border: 1px solid white;">0.440</td><td style="border: 1px solid white;">11.100</td><td style="border: 1px solid white;">6.43913787342023</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">0.2250</td><td style="border: 1px solid white;">0.400</td><td style="border: 1px solid white;">3.900</td><td style="border: 1px solid white;">29.00</td><td style="border: 1px solid white;">0.989</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">8</td><td style="border: 1px solid white;">0.03</td><td style="border: 1px solid white;">12.8</td><td style="border: 1px solid white;">white</td><td style="border: 1px solid white;">3.570</td><td style="border: 1px solid white;">118.00</td><td style="border: 1px solid white;">0.360</td><td style="border: 1px solid white;">4.200</td><td style="border: 1px solid white;">6.56926268864164</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">0.1700</td><td style="border: 1px solid white;">0.360</td><td style="border: 1px solid white;">4.200</td><td style="border: 1px solid white;">93.00</td><td style="border: 1px solid white;">0.98999</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">7</td><td style="border: 1px solid white;">0.029</td><td style="border: 1px solid white;">12.0</td><td style="border: 1px solid white;">white</td><td style="border: 1px solid white;">3.650</td><td style="border: 1px solid white;">161.00</td><td style="border: 1px solid white;">0.890</td><td style="border: 1px solid white;">1.800</td><td style="border: 1px solid white;">6.30901305819881</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">0.2150</td><td style="border: 1px solid white;">0.230</td><td style="border: 1px solid white;">4.200</td><td style="border: 1px solid white;">64.00</td><td style="border: 1px solid white;">0.99688</td><td style="border: 1px solid white;">0</td><td style="border: 1px solid white;">3</td><td style="border: 1px solid white;">0.041</td><td style="border: 1px solid white;">8.0</td><td style="border: 1px solid white;">white</td><td style="border: 1px solid white;">3.420</td><td style="border: 1px solid white;">157.00</td><td style="border: 1px solid white;">0.440</td><td style="border: 1px solid white;">5.100</td><td style="border: 1px solid white;">5.00776490598469</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">0.3200</td><td style="border: 1px solid white;">0.390</td><td style="border: 1px solid white;">4.400</td><td style="border: 1px solid white;">31.00</td><td style="border: 1px solid white;">0.98904</td><td style="border: 1px solid white;">1</td><td style="border: 1px solid white;">8</td><td style="border: 1px solid white;">0.03</td><td style="border: 1px solid white;">12.8</td><td style="border: 1px solid white;">white</td><td style="border: 1px solid white;">3.460</td><td style="border: 1px solid white;">127.00</td><td style="border: 1px solid white;">0.360</td><td style="border: 1px solid white;">4.300</td><td style="border: 1px solid white;">6.56926268864164</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[71]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;  Name: winequality, Number of rows: 6497, Number of columns: 15</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>The vDataFrame has also a method 'score' to do model evaluation.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[73]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">winequality</span><span class="o">.</span><span class="n">score</span><span class="p">(</span><span class="s2">&quot;quality&quot;</span><span class="p">,</span> <span class="s2">&quot;pred_quality&quot;</span><span class="p">,</span> <span class="n">method</span> <span class="o">=</span> <span class="s2">&quot;mse&quot;</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt output_prompt">Out[73]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>0.611933859491364</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>You can play with your prediction.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[77]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">winequality</span><span class="o">.</span><span class="n">hist</span><span class="p">([</span><span class="s2">&quot;quality&quot;</span><span class="p">,</span> <span class="s2">&quot;pred_quality&quot;</span><span class="p">],</span> <span class="n">h</span> <span class="o">=</span> <span class="p">(</span><span class="mi">2</span><span class="p">,</span> <span class="mi">2</span><span class="p">))</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,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2ea5z33ufaeddtru11577RZTp0598J577tnsl7/85eYHHXTQ0ltvvXXC3LlztzjggAMevPDCCyetbV+HHXbYvZ/97Ge3++AHP3jbv/zLv2xz7733jkuSXXbZZfnixYvH33777eO22Wabld/5zne2fd7znndPktx///2b7brrrg8tW7asLrrookk77bTT6gZ0H7bllluuuPvuuzfbaaedkiRHHXXUfW9/+9snXHvttVv9x3/8xzXr+zwNGlWYrqovJ3laks8meXlr7bb+qi9W1eVr2OyWJLsN3N+1v2xk3y9I8pdJjmqtPTiw7fNGbPv90dQKAABANwceeOB9r3nNa/a+/fbbJ7ziFa9Y9JznPOf+efPmPeJc5qc+9anLP/7xj990wgkn7LXq/ON3v/vdt0ybNu3BD3/4w7941atetc/EiRNXHnbYYUuWLFkybk37OuOMM249/vjj95o2bdrTp0+fvmSnnXZaliQTJkxof/Inf3Lbc5/73AN23HHHh/bee++Hpw+94x3vuPXII488YNKkScuf8YxnLLnvvvvW2H+SvP71r7/zFa94xX477rjjsh/84AfzkuTlL3/5XVdfffWWO+ywwwa5LHkNDqOvsVHVS1trl4xYtsVA+F3dNuOTzEvy/PTC8ewkx7fWrhloc0h6Fx47urV2w8DySUmuSDK9v+gnSZ7ZWlu8pv1Nnz69XXbZZet8LMCm56VvmznWJQzFJf9w8liXAEk23WMsSb77jnPGuoShWLrPT8e6BGAMbLXVVle01g4dXHbllVfetN9++611WvPZZ5+93Zw5c7b6x3/8x18Ot8LV22effQ687LLL5u60006dr6jdxdFHH73PKaeccvvv/d7v3TvabebNm7f9wQcfPGV160Z7AbK/Xs2yf1vbBq215UlOSfLNJHOTfKm1dk1VnV5Vx/SbnZXkyUkurKorq+ri/raLk5yRXgCfneT0tQVpAAAAWJ1FixaN23///adNnDhxZZcgvS5rneZdVTuld+GvJ/VHkVedlb5Nki3X1Xl/NPuSEcveN3D7BWvZ9rwk561rHwAAAKy/P/7jP16UZK1X4F4fM2fO3O7cc8+dPLjsmc985pJzzz33ESPg8+fPv2pD73vQdtttt+K66667ekP3u65zpl+c5E3pnbP8kYHl9yZ594YuBgAAgE3DySefvOjkk0/e4CF9Y7HWMN1aOz/J+VX1qtbaPz9GNQEAAMBGbV3TvN/QWvtckilVderI9a21j6xmMwAAANikrWua91b9f5887EIAAADg8WJd07w/1f/3rx6bcgAAAGDjt66R6SRJVZ2Z3s9jPZDkG0kOSvL2/hRwAAAANiEv/MP/NW1D9vftc/9knVfTnjdv3oQjjjhi2pQpU5bOmTPn2iRZvnx5DjvssKmTJ09e9o1vfGP+6rb79Kc//ZS/+7u/2zlJ9t9///svuuiiG+fOnbvF8ccfv/fChQu3uPPOO+dsyMeyyqjCdJIXtdb+Z1W9MslNSX4/yQ+TCNMAANrK8x4AABqASURBVABsELvuuuuDq4J0kvzt3/7t5L333vuBJUuWjFtd+2uuuWaLj33sY0/93ve+d90OO+yw4tZbbx2fJAcccMCDc+bMuXb77bc/ZFi1bjbKdqtC98uSXNhau3tI9QAAAEBuvPHGzb/97W9v++Y3v/nOweXvfOc7d/7iF7+4bZJ86lOf2uHNb37zr3fYYYcVSbLzzjsvf6zqG+3I9P+tquvSm+b9tqraIcnS4ZUFAADAE9mf/dmf7fbBD37w5nvuuecRo9JnnXXWratuL1iwYIskedaznrX/ihUrctppp936yle+8p7Hor5RjUy31k5L8qwkh7bWHkpyX5Jjh1kYAAAAT0wXXnjhtttvv/3yZz/72fevrd3y5cvrxhtv3OL73//+9Z/5zGcWnHrqqVMWLVq02inhG9poR6aTZP/0fm96cJvPbOB6AAAAeIL78Y9//ORLL730d/bZZ59tH3zwwc3uu+++zf7gD/5gzy996Us3DrZ76lOfuuzQQw+9b8KECe1pT3vasj322GPptddeu8Vzn/vctYbwDWFUI9NV9dkkf5fkOUkO6/8dOsS6AAAAeIL66Ec/estNN930s/nz5191zjnnLDj88MPvXRWk3/72t+/y+c9//neS5JhjjvnNZZddtnWS/OpXvxr/i1/8YuJ+++334GNR42hHpg9NMrW11oZZDAAAAGNvND9lNVbmzp37pGOOOeY3SXLsscfe8+1vf3ubadOmPX2zzTZr733vexdOnjx5xWNRx2jD9NVJdkpy2xBrAQAAgEd4yUtecu9LXvKSe1fdX758ef3u7/7ufUmy2Wab5eyzz745yc2PdV2j/Wms7ZNcW1XfrKqLV/0NszAAAACeOMaPH9+WLFky7pBDDpm6tnbf+c53blhXX3Pnzt3ikEMOmTpp0qSHNlyFjzTakekPDKsAAAAA2GuvvR668cYbf7Yh+jrggAMenDNnzrUboq81GVWYbq39oKr2SLJva+07VbVlksfkcuMAAACwsRnt1bz/e5KLknyqv2iXJF8ZVlEAAACwMRvtOdMnJ3l2knuSpLV2Q5Idh1UUAAAAbMxGG6YfbK0tW3WnqsYn8TNZAAAAPCGN9gJkP6iqdyd5UlW9MMkfJ/na8MoCAABgrEy8Yf9pG7K/pftet87frZ43b96EI444YtqUKVOWzpkz59pFixaNe8tb3rLHDTfc8KSqyic+8YmbVv0k1iqLFy8e9/rXv37P2267bcLy5cvrbW97269OPvnkRXPnzt3i+OOP33vhwoVb3HnnnXM25GNZZbRh+rQkJya5KskfJbkkybnDKAgAAIAnpl133fXhq3Cfcsopuz3/+c+/56tf/eqCpUuX1n333fdbM6s/+tGP7rDffvs98PWvf33+bbfdNv6QQw6ZduKJJy5edTXv7bff/pBh1Traq3mvrKqvJPlKa+2OYRUDAAAAixcvHjd79uytP//5z9+UJBMnTmwTJ05ckSQf+chHdkiSU0899Y6qypIlS8atXLky99xzz2bbbrvt8s033/wxOSV5rWG6qirJ+5Ockv751VW1IsnHW2unD788AAAAnmjmzZs3YdKkScvf8IY3TJk7d+6W06ZNu2/mzJkLt9lmm5WnnnrqwwO8p5566q+PPfbYfaZMmXLQ/fffP+6Tn/zkgnHjHptfcV7XBcjent5VvA9rrU1qrU1KckSSZ1fV24deHQAAAE84y5cvr+uuu27LP/qjP7pjzpw512655ZYrTz/99J1Gtrv44ou3nTp16gM33XTTz374wx9ee9ppp+1+1113jfZC24/KunbyxiSva63duGpBa21Bkjck+W/DLAwAAIAnpj322GPZjjvuuOyoo466L0le9apX3XXVVVdtObLd5z//+e1e+cpX3rXZZptl6tSpD+66664PXnXVVRMfixrXFaY3b63dOXJh/7zpzYdTEgAAAE9ku+222/LJkycv+9nPfrZFklx66aXb7LfffkuT5Mwzz9zhzDPP3CFJdtlll2WXXnrpNkly8803j7/pppsm7rfffsvW3POGs64LkK2tiMekQAAAAB5bo/kpq2H78Ic/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
"
>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Some Regressors can be drawn.</p>

</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[79]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">model</span><span class="o">.</span><span class="n">plot</span><span class="p">()</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>




<div class="output_png output_subarea ">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlcAAAHwCAYAAACLykpPAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAADh0RVh0U29mdHdhcmUAbWF0cGxvdGxpYiB2ZXJzaW9uMy4xLjIsIGh0dHA6Ly9tYXRwbG90bGliLm9yZy8li6FKAAAgAElEQVR4nOzdeXxU9b3/8fdkIWENSwKEHUUWWQx7WAOEJDAnrdQdCyIal9ZWFNdeRVHa2qq9llu11kLtbflZl7a2dWZCAiHsBBEBBdlEkSUBEpYACdnn94cP5ooESOA7OTPJ6/l4+LhklvN9z2dOk/edOXPGUVpa6hUAAACMCLE7AAAAQH1CuQIAADCIcgUAAGAQ5QoAAMAgyhUAAIBBlCsAAACDKFcArlhaWpqeffZZSdLq1avVr18/mxNV7/Dhw0pMTFSbNm30+OOPS5K2b9+uESNGyOu9/LPS9OzZU1lZWVeULSkpSX/605/8sn5paan69++v/Pz8y40HoBYoV0A91LNnT+3du1dpaWn6y1/+Uqdrjx49Wlu3bj0nS22KR0REhKRvysaKFSuMZlu4cKHatGmjgoICvfjii5KkuXPn6uGHH5bD4fDltWt2JsybN0/z5s3TihUrlJSUJOmbmc6YMUMvvfSSzemAhoFyBaDB2Ldvn/r06eMrUnl5eVqxYoW+//3v25zM/2677TYtWrRIpaWldkcB6j3KFdBAVFZW6oknnlCHDh3Uq1cv/f73v1dERIQqKioknf8K07x583TnnXf6fp46daq6dOmimJgYJSYm6vPPP692nRUrVuiqq66SJM2cOVP79u3TDTfcoNatW+vll1/W9ddfr9dee+2c+wwePFj//ve/DT/ic6Wlpemvf/2rfvOb36h169bKyspSVlaW4uLiFBkZedH77tmzRykpKYqNjVWHDh00Y8YMnThxotrbVlZW6te//rV69+6tNm3aKD4+Xvv375ckrVu3TiNHjlRMTIxGjhypdevWnXPfffv2ady4cWrTpo2cTqcKCgp813344YeKi4tT27ZtlZSUpO3bt9fq8Xfq1EktW7bU+vXra3U/ALVHuQLqoV27dqlbt25asGCB7rjjDknfvCXm8Xi0fv16rVu3Th988EGttpmSkqJt27bpwIEDiouL04wZMy55n7feektdunTRP//5Tx07dkyPPvqopk+frr/97W++23z66afKzc3V5MmTJcn3ysqSJUuUkJBQ7XZfeukltW3b9oL/VWfBggWaOnWqHnnkER07dkyJiYnaunWrevbsec7tqpud1+vVY489pr1792rLli06cOCA5s2bV+06v/3tb/Xuu+/q3//+twoKCvTmm2+qSZMmOnbsmKZMmaIHHnhAeXl5mjVrlqZMmaKjR4/67vvOO+/ozTff1IEDB1ReXq5XXnnFl+mOO+7Qyy+/rIMHDyolJUU33HCDysrKzlt/zpw5mjNnjhISErRkyZJzruvdu7c+/fTTanMDMIdyBTQQ//jHP/TTn/5UnTt3VuvWrfXYY4/V6v533nmnmjdvroiICM2ZM0effvqpCgsLa50jNTVVu3fv1u7duyVJ/+///T/ddNNNatSoUY238dhjj+nIkSMX/K+mCgsL1bx580verkePHpo4caIiIiIUExOjBx98UKtWrar2tm+99Zbmzp2rXr16yeFwaMCAAWrTpo3S09PVo0cP/fCHP1RYWJhuvfVW9erVS26323ffGTNmqGfPnmrcuLFuvPFGbdmyRZL097//XZMnT9bEiRMVHh6u2bNnq6Sk5LxXvi6lefPml/WcAagdyhXQQOTm5qpTp06+n7t06VLj+1ZWVuqpp55S7969FR0d7Xu159tvW9VUZGSkbrrpJv3tb39TVVWV3nvvPf3whz+s9XZMaNmypU6dOnXJ2x0+fFjTpk1T9+7dFR0drZkzZ57zitO3HThwQFdfffV5l+fl5Z038y5duig3N9f3c7t27Xz/btKkiYqKiiR989x9+74hISHq1KnTOfetiVOnTikqKqpW9wFQe5QroIGIjY3VgQMHfD+fPQ7orCZNmqi4uNj386FDh3z/fuedd/Thhx8qPT1d+fn52rVrlyRd9ukLzr41uGzZMjVu3Fjx8fG1uv+vf/1rtW7d+oL/1VT//v19r6BdzDPPPCOHw6GNGzeqoKBAb7311gUfe6dOnbRnz57zLo+NjdW+ffvOuWz//v3q0KHDJdfv0KHDOff1er06cOBAje77bTt27NCAAQNqdR8AtUe5AhqIG2+8Ua+99poOHDig48ePn/ex/Ouuu07vv/++ysvLtXHjxnOOyTp16pQiIiLUpk0bFRcXa86cOTVet127dvrqq6/OuSw+Pl4hISF64oknLutVqyeeeELHjh274H81lZiYqM2bN6ukpOSitzt16pSaNWumqKgoHTx40HcsVHVmzpyp5557Trt375bX69Vnn32mo0ePatKkSdq9e7feeecdVVRU6P3339f27dvldDovmfPGG29Uenq6li1b5jsWq1GjRhoxYkSNH+vBgwd1/PhxDR8+vMb3AXB5KFdAA3H33XcrKSlJQ4cO1fDhwzVlypRzrn/22Wf15Zdfql27dnr++ed16623+q6bNm2aunTpou7duysuLq5Wf6Afe+wx/epXv1Lbtm313//93+dsc+vWrZo6deqVP7jL1K5dO40bN04ffvjhRW/39NNPa9OmTYqJidGUKVN0/fXXX/C2Dz30kG666SZZlqXo6Gjdd999OnPmjNq0aaMPPvhAv/3tbxUbG6vf/OY3+uCDDxQdHX3JnL169dKf//xnPfzww+rQoYM8Ho8++OCDWh2n9s4772jatGm+84gB8B9HaWnp5Z+WGEDQ2rt3r3r16qWioiKFhYXV+fqLFi3SwoULlZ2dXedrf9v27dt19913a82aNb7zX9U3paWlGjJkiLKysi74aUoA5tT9b1QADV5xcbH+8Ic/6L777rM7ivr06aO1a9faHcOvIiIi9Nlnn9kdA2gweFsQQJ3KzMxUx44d1bZtW9122212xwEA43hbEAAAwCBeuQIAADCIcgUAAGBQQB3Q3qFDh1qdNfpKFRcXq0mTJnW2Xn3GLM1inmYxT3OYpVnM0xw7Zrlv375qvykhoMpVly5dtHr16jpbLycnp9Znhkb1mKVZzNMs5mkOszSLeZpjxyzHjBlT7eW8LQgAAGAQ5QoAAMAgyhUAAIBBlCsAAACDKFcAAAAGUa4AAAAMolwBAAAYRLkCAAAwiHIFAABgEOUKAADAIMoVAACAQZQrAAAAgyhXAAAABlGuAAAADKJcAQAAGOTXcjV//nzFxcVp4MCBmj59ukpKSvy5HAAAgO3C/LXhgwcP6rXXXtOWLVvUuHFj3X777Xrvvfd0xx13+GtJAAD8bt4b6Xo/8xNVVXkVEuLQzcmDNOf+yb7rXSu2av6ibB0qKFT76CjNmjZeqQn9bExcv52dd15+oWJjNgTEvP1WriSpsrJSZ86cUXh4uIqLixUbG+vP5QAA8Kt5b6Tr3cUbfT9XVXl9P8+5f7JcK7Zq7utulZSWS5Ly8gs193W3JNn+B78+CtR5++1twY4dO+qhhx5Sjx491LVrV0VFRSkpKclfywEA4HfvZ35y0cvnL8r2/aE/q6S0XPMXZfs9W0MUqPP22ytXx48fl8vl0s6dO9WyZUtNnTpVb7/9tm6//fZzbrdgwQItXLhQkpSbm6ucnBx/RTpPUVFRna5XnzFLs5inWczTnIY+y6oq7wUvz8nJUV5+YbXX5+UXVju3hj7PK1XbedcVv5WrZcuWqVu3boqJiZEkTZkyRevWrTuvXKWlpSktLU2SFB8fr/j4eH9FOk9OTk6drlefMUuzmKdZzNOchj7LkJCsagtWSIhD8fHxio3ZUO0f/NiYqGrn1tDneaVqO++64re3BTt37qz169eruLhYXq9X2dnZ6t27t7+WAwDA725OHnTRy2dNG6/IiPBzrouMCNesaeP9nq0hCtR5++2Vq2HDhumGG27Q8OHDFRYWpri4ON8rVAAABKOznwq80KcFzx5EzacF68a35/3NpwUDY95+/bTgM888o2eeecafSwAAUKfm3D/5nFMvfFdqQj/b/7g3JGfnHUhvsXKGdgAAAIMoVwAAAAZRrgAAAAyiXAEAABhEuQIAADCIcgUAAGAQ5QoAAMAgyhUAAIBBlCsAAACDKFcAAAAGUa4AAAAMolwBAAAYRLkCAAAwiHIFAABgEOUKAADAIMoVAACAQZQrAAAAgyhXAAAABlGuAAAADKJcAQAAGES5AgAAMIhyBQAAYBDlCgAAwCDKFQAAgEGUKwAAAIMoVwAAAAZRrgAAAAyiXAEAABhEuQIAADCIcgUAAGAQ5QoAAMAgyhUAAIBBlCsAAACDKFcAAAAGUa4AAAAMolwBAAAYRLkCAAAwiHIFAABgEOUKAADAIMoVAACAQZQrAAAAgyhXAAAABlGuAAAADKJcAQAAGES5AgAAMIhyBQAAYBDlCgAAwCDKFQAAgEGUKwAAAIMoVwAAAAZRrgAAAAyiXAEAABhEuQIAADCIcgUAAGAQ5QoAAMAgyhUAAIBBlCsAAACDKFcAAAAGUa4AAAAMolwBAAAYRLkCAAAwiHIFAABgEOUKAADAIMoVAACAQZQrAAAAgyhXAAAABlGuAAAADKJcAQAAGES5AgAAMIhyBQAAYFCYvza8c+dOTZs2zffzV199pWeeeUYPPvigv5YEUI+4VmzV/EXZOlRQqPbRUZo1bbxSE/rZHes8V5qzLh6niTXObiMvv1CxMRsuaxvz3kjX+5mfqKrKq5AQh25OHqQ590+u1TauVCBkkC49z2DZ/wPBuc9plm3P6bf5rVz16tVLGzZskCRVVlaqe/fuuv766/21HIB6xLViq+a+7lZJabkkKS+/UHNfd0tSQP2BudKcdfE4TaxhYhvz3kjXu4s3+n6uqvL6fq6rP4SBkEG69DyDZf8PBIHynH5XnbwtuGzZMl111VXq2rVrXSwHIMjNX5Tt+8NyVklpueYvyrYpUfWuNGddPE4Ta5jYxvuZn9Tqcn8IhAzSpecZLPt/IAiU5/S7/PbK1be9//77uuWWW6q9bsGCBVq4cKEkKTc3Vzk5OXURSZJUVFRUp+vVZ8zSrIY+z7z8wgtefjlz8dc8rzSn6cfprzVMbKOqynvBy+tqXw+EDNKl51kX+0V9ESjP6Xf5vVyVlZXJ5XJp3rx51V6flpamtLQ0SVJ8fLzi4+P9HcknJyenTterz5ilWQ19nrExG6r9AxMbE3VZc/HXPK80p+nH6a81TGwjJCSr2j+EISGOOtvXAyGDdOl51sV+UV8EynN63vr+XmDx4sWKi4tTu3bt/L0UgHpi1rTxiowIP+eyyIhwzZo23qZE1bvSnHXxOE2sYWIbNycPqtXl/hAIGaRLzzNY9v9AcPa583qrVHa64LzL7eL3V67ee+893Xrrrf5eBkA9cvag3UD/tNSV5qyLx2lijW9v45tPt9V+G2cPLrbzk3qBkEG69DyDZf+32+nTpzUgtkyu4+v0+Zb18lZWqNuEh3Tr5OG2f1rQUVpaWv0blgYUFRWpR48e2rFjh6Kioi55+/j4eK1evdpfcc7T0N96MYlZmsU8zWKe5jBLs5hn7eTl5cnj8cjtdmv58uUqLS1Vy5YtlZKSol69eumhhx5SREREneUZM2aM1q1bd97lfn3lqmnTpsrLy/PnEgAAoJ7yer3atm2b3G633G63Nm785jQL3bt31z333CPLsjRixAiFh4crJyenTovVxdTJpwUBAABqory8XGvWrJHL5ZLH49HXX38tSRo6dKjmzp0ry7LUp08fORwOm5NeGOUKAADYqrCwUEuWLJHL5VJmZqYKCwsVGRmp8ePH6/HHH9ekSZPUvn17u2PWGOUKAADUuX379snj8cjlcmnVqlWqqKhQdHS0vv/97ys1NVXjx49X06ZN7Y55WShXAADA77xerzZv3iy32y2Xy6XPPvtM0jdfl/fTn/5UqampGjp0qEJDQ21OeuUoVwAAwC9KS0u1YsUK3yf8cnNzFRISohEjRugXv/iFLMvSNddcY3dM4yhXAADAmGPHjmnx4sXyeDxasmSJTp8+raZNm2rixIlyOp1KSUlRTEyM3TH9inIFAACuyJ49e+R2u+XxeLR27VpVVlaqffv2uvXWW+V0OjVu3DhFRkbaHbPOUK4AAECtVFVV6eOPP/adLmH79u2SpL59++rRRx+VZVkaOHCgQkL8/i17AYlyBQAALqm4uFjLly+Xy+VSenq6jhw5otDQUI0ePVp33XWXnE6nunXrZnfMgEC5AgAA1Tp8+LAWL14st9utZcuW6cyZM2rRooWSk5NlWZaSkpLUqlUru2MGHMoVAACQ9M3pEnbu3On7upmPPvpIXq9XnTt31owZM2RZlkaPHq1GjRrZHTWgUa4AAGjAKioqlJOT4ytUe/bskSQNHDhQTz31lCzLUv/+/QP662YCDeUKAIAG5tSpU8rKypLb7VZGRoaOHj2qRo0aKSEhQT/96U/ldDrVsWNHu2MGLcoVAAANQG5uru9knsuXL1dZWZlat26tlJQUWZaliRMnqnnz5nbHrBcoVwAA1ENer1efffaZr1B98sknkqSrrrpK9913nyzL0ogRIxQWRhUwjYkCAFBPlJeXa9WqVb5CtW/fPjkcDg0dOlTPPfecLMtS7969OX7KzyhXAAAEsRMnTigzM1Nut1tLlixRYWGhIiMjNWHCBD355JNKSUlR+/bt7Y7ZoFCuAAAIMl9//bXv032rV69WRUWFoqOjdf311ys1NVXjx49XkyZN7I7ZYFGuAAAIcFVVVdq8ebNcLpfcbre2bt0qSerdu7cefPBBpaamasiQIQoNDbU5KSTKFQAAAamkpEQrVqzwHT+Vl5enkJAQjRw5Ur/85S9lWZZ69Ohhd0xUg3IFAECAKCgoUEZGhjwej5YsWaKioiI1bdpUSUlJcjqdmjRpktq0aWN3TFwC5QoAABt98cUXcrvd8ng8Wrt2raqqqhQbG6upU6fK6XQqISFBkZGRdsdELVCuAACoQ5WVldqwYYPcbrf+/ve/a9++fZKkfv366fHHH5dlWRo4cCCnSwhilCsAAPysuLhYy5Ytk9vtVnp6uvLz8xUWFqYBAwbowQcflNPpVNeuXe2OCUMoVwAA+MHhw4eVnp4ut9utZcuWqaSkRC1atFBycrJSU1OVlJSkHTt2KD4+3u6oMIxyBQCAAV6vVzt27JDL5ZLH49GGDRvk9XrVpUsXzZw5U5ZladSoUWrUqJHdUeFnlCsAAC5TRUWF1q1b5ytUX375pSRp0KBBevrpp2VZlvr168fxUw0M5QoAgFo4deqUli5dKrfbrYyMDB07dkyNGjXSuHHjNGvWLDmdTnXo0MHumLAR5QoAgEs4ePCgPB6PXC6XVq5cqbKyMrVu3VqTJk2SZVlKTExU8+bN7Y6JAEG5AgDgO7xerz799FPf2dE3bdokSbr66qt1//33y7IsxcfHKyyMP6M4H3sFAACSysrKtGrVKl+h2r9/vxwOh4YNG6bnn39elmWpV69eHD+FS6JcAQAarBMnTvi+biYzM1MnT55U48aNlZiYqJ/97GeaNGmS2rVrZ3dMBBnKFQCgQdm7d6/cbrfcbrfWrFmjiooKxcTE6Ac/+IFSU1M1btw4NWnSxO6YCGKUKwBAvVZVVaVNmzbJ5XLJ7XZr27ZtkqQ+ffpo1qxZSk1N1ZAhQxQSEmJzUtQXlCsAQL1TUlKi5cuX+74Q+dChQwoJCdGoUaP0wgsvyLIsXX311XbHRD1FuQIA1AsFBQVavHixPB6Pli5dqqKiIjVr1kxJSUlyOp1KSUlRmzZt7I6JBoByBQAIWrt37/YdP5WTk6Oqqip16NBBt99+u5xOpxISEhQREWF3TDQwlCsAQNCorKzURx995CtUu3btkiQNGDBATzzxhCzLUlxcHKdLgK0oVwCAgFZUVKRly5bJ7XYrPT1dBQUFCgsL09ixY3XffffJ6XSqS5cudscEfChXAICAc+jQIaWnp8vtdis7O1slJSWKiopSSkqKLMtSUlKSoqKi7I4JVItyBQCwndfr1fbt231v923YsEGS1LVrV911112yLEujRo1SeHi4zUmBS6NcAQBsUVFRobVr18rlcsnj8eirr76SJA0ePFjPPvusnE6n+vbty/FTCDqUKwBAnTl58qSWLl0ql8ulzMxMHT9+XBERERo3bpxmz56tyZMnKzY21u6YwBWhXAEA/OrAgQPyeDxyuVxauXKlysvL1aZNGzmdTqWmpmrChAlq1qyZ3TEBYyhXAACjvF6vtmzZ4itUW7ZskST16NFDP/7xj2VZluLj4xUaGmpzUsA/KFcAgCtWVlamlStXyuPxyO1268CBA3I4HIqPj9e8efNkWZZ69epld0ygTlCuAACX5fjx48rIyJDH41FmZqZOnTqlJk2aKDExUU899ZQmTZqktm3b2h0TqHOUKwBAjeXm5urVV1+V2+3WmjVrVFlZqbZt2+qmm26SZVkaN26cGjdubHdMwFaUKwDABVVVVemTTz6Ry+WS2+3W559/Lknq06ePZs+eLcuyNHjwYIWEhNicFAgclCsAwDnOnDmjFStW+M4/dfjwYYWGhmrUqFH68Y9/rB/96Ee66qqr7I4JBCzKFQBA+fn5Wrx4sdxut7KyslRcXKzmzZsrKSlJlmUpOTlZrVu3Vk5ODsUKuATKFQA0ULt27fJ93UxOTo68Xq86duyoadOmybIsjRkzRhEREXbHBIIO5QoAGojKykqtX7/eV6h2794tSbruuuv0s5/9TE6nU3FxcXzdDHCFKFcAUI8VFRUpKytLbrdbixcvVkFBgcLDwzV27Fj96Ec/ktPpVOfOne2OCdQrlCsAqGfy8vKUnp4ut9ut7OxslZaWqmXLlkpJSZFlWUpKSlKLFi3sjgnUW5QrAAhyXq9Xn3/+ue/tvo8//liS1K1bN6WlpcmyLI0cOVLh4eE2JwUaBsoVAASh8vJyrV271ne6hL1790qShgwZorlz58rpdOraa6/l+CnABpQrAAgSJ0+e1JIlS+RyuZSZmakTJ04oIiJCEyZM0KOPPqpJkyYpNjbW7phAg0e5AoAAtn//fnk8HrlcLq1atUrl5eWKjo5WamqqUlNTNWHCBDVt2tTumAC+hXIFAAHE6/Vq8+bNvkL16aefSpJ69uypBx54QKmpqRo2bJhCQ0NtTgrgQihXAGCz0tJSrVy5Um63Wx6PRwcPHlRISIji4+P185//XJZlqWfPnnbHBFBDlCsAsMGxY8eUkZEhj8ejJUuW6NSpU2rSpIkmTpyoOXPmaNKkSYqJibE7JoDLQLkCgDry5Zdf+l6dWrNmjSorK9WuXTvdfPPNsixL48aNU2RkpN0xAVwhyhUA+ElVVZU+/vhj3/mntm/fLknq27evHnnkEVmWpUGDBikkJMTmpABMolwBgEFnzpxRdna27xWqI0eOKDQ0VKNGjdLMmTPldDrVvXt3u2MC8CPKFQBcoSNHjig9PV0ej0dZWVk6c+aMWrRooeTkZDmdTiUnJ6tVq1Z2xwRQRyhXAFBLXq9Xu3bt8p0dff369fJ6verUqZPuuOMOWZalMWPGqFGjRnZHBWADyhUA1EBFRYXWr1/vK1RffPGFJCkuLk7/9V//JcuyNGDAAL5uBgDlCgAu5PTp08rKypLL5VJGRoaOHj2q8PBwJSQk6IEHHpDT6VSnTp3sjgkgwPi1XJ04cUL333+/tm3bJofDoTfffFPx8fH+XBIArkheXp48Ho/cbreWL1+u0tJStWrVSikpKbIsSxMnTlSLFi3sjgkggPm1XD3yyCNKTk7WO++8o7KyMhUXF/tzOTRg895I1/uZn6iqyquQEIduTh6kOfdPtjvWea40p2vFVs1flK1DBYVqHx2lWdPGKzWhX60ymNiGCWnPLFLOp3t9P8cP6KYFz08zusbZx5qXX6jYmA3VPlav16utW7f6CtXGjRslSd27d9c999wjy7I0cuRIhYVV/+uyvjyntd2GXftRoOy/FxMoz2mwqI+P1W/lqrCwUKtWrdKCBQskSY0aNeLgTvjFvDfS9e7ijb6fq6q8vp8DqWBdaU7Xiq2a+7pbJaXlkqS8/ELNfd0tSTX+RWRiGyZ8t1hJUs6ne5X2zCJjBetijzVlZC+tXr3ad7qEr7/+WpI0bNgwzZ07V5ZlqU+fPpc8fqq+PKe13YZd+1Gg7L8XEyjPabCor4/Vb2eu27t3r2JiYnTPPfdo2LBhuv/++1VUVOSv5dCAvZ/5Sa0ut8uV5py/KNv3C+isktJyzV+UXeMMJrZhwneL1aUuvxzffaxV5SUq+HqLHvjRveratatSU1P11ltvqW/fvnrttde0Z88eZWdn67HHHtO1115bowPT68tzWttt2LUfBcr+ezGB8pwGi/r6WP32ylVFRYU2bdqkV155RcOGDdPs2bP10ksvae7cuefcbsGCBVq4cKEkKTc3Vzk5Of6KdJ6ioqI6Xa8+s3OWVVXeC14eSM9vbXJWN8+8/MJq75+XX1jjx2liG/5mKkdefqHKzxSqOH+3ivN3q+T4PslbpZDwJkpOHKuRI0dq0KBBaty4saRv/h/CvXv31mqNK933AuU5rc02ioqKbNuPgmH/rW1Gf/1vPViYfKyB9Dfdb+WqY8eO6tSpk4YNGyZJuuGGG/TSSy+dd7u0tDSlpaVJkuLj4+v0gPecnBwOsDfEzlmGhGRV+0cuJMQRUM9vbXJWN8/YmA3V/iKKjYmq8eM0sQ0zll7wmivJ4fV6tXnzZrlcLh3e8L8qPpEnSQpv2kZRXYepScw16nZ1H/1j4azLXuPbrnTfC5TntDbbyMnJUWxMlC37UeDsvxdW24z++t96sDD5WAPpb7rf3hZs3769OnXqpJ07d0qSsrOz1adPH38thwbs5uRBtbrcLleac9a08YqMCD/nssiIcM2aNr7GGUxsw4T4Ad1qdfnFlJaWKjMzU7NmzVLPnj01evRovfjii+rSsZ3a9klSp5H3qtPIe9X6mvFq2a67Hroj8crCf0t9eU5ruw279qNA2X8vJoQvBSoAACAASURBVFCe02BRXx+rXz8t+Morr+jOO+9UWVmZunfvrj/+8Y/+XA4N1NkDhwP904JXmvPswZ1X8qkaE9swYcHz067o04JHjx5VRkaG3G63li5dqtOnT6tp06aaOHGiLMtSSkqKoqOjv/NpQfOPtb48p7Xdhl37UaDsvxcTKM9psKivj9VRWlpa/UEDNoiPj9fq1avrbL1Aegkx2DFLs5jn+fbs2eP7dN/atWtVWVmp9u3by7IsWZalhIQERUZGVntf5mkOszSLeZpjxyzHjBmjdevWnXc5Z2gHEJCqqqq0YcMGud1uud1u7dixQ5LUr18/Pfroo7IsSwMHDlRIiN+ObgCAy0K5AhAwiouLlZ2d7XuFKj8/X2FhYRo9erTuvvtuOZ1OdevWze6YAHBRlCsAtjp8+LAWL14st9utZcuW6cyZM2rRooWSk5NlWZaSkpLUqlUru2MCQI1RrgDUKa/Xq507d8rlcsnj8eijjz6S1+tV586ddeedd8rpdGr06NF8owOAoEW5AuB3FRUVysnJ8RWqPXv2SJIGDhyop59+Wk6nU/3796/RWdEBINBRrgD4xalTp5SVlSWXy6WMjAwdO3ZMjRo1UkJCgh588EFNnjxZHTt2tDsmABhHuQJgTG5urjwej1wul1asWKGysjK1bt1aKSkpSk1NVWJiopo3b253TADwK8oVgMvm9Xr12Wef+QrVpk2bJElXXXWV7rvvPqWmpio+Pl5hYfyqAdBw8BsPQK2UlZVp9erV8ng8crvd2rdvnxwOh4YNG6bnnntOlmWpd+/eHD8FoMGiXAG4pBMnTigzM1Nut1tLlixRYWGhGjdurAkTJujJJ5/UpEmT1K5dO7tjAkBAoFwBqNbXX3/tOzv66tWrVVFRoZiYGE2ZMkWWZWn8+PFq0qSJ3TEBIOBQrgBI+ubrZjZv3iyXyyW3262tW7dKkvr06aNZs2bJsiwNGTJEoaGhNicFgMBGuQIasJKSEq1YscL3dTN5eXkKCQnRyJEj9cILL8jpdKpHjx52xwSAoEK5AhqYgoICZWRkyO12a+nSpSoqKlLTpk2VlJQky7KUkpKiNm3a2B0TAIIW5QpoAL744gvf8VPr1q1TVVWVYmNjNXXqVFmWpbFjxyoyMtLumABQL1CugHqosrJSGzZs8BWqnTt3SpL69++vxx9/XKmpqYqLi+N0CQDgBxctVz179pQktW3bVqtXr66TQAAuT3FxsZYtWya326309HTl5+crLCxMY8aM0T333CPLstSlSxe7YwJAvXfRcrVr1666ygHgMhw6dEiLFy+W2+3WsmXLVFJSoqioKCUnJ8uyLCUnJysqKsrumADQoFzylSuHw6GYmBheuQICgNfr1fbt232f7tuwYYO8Xq+6dOmimTNnyrIsjR49WuHh4XZHBYAGi1eugABXUVGhdevWyeVyyePx6Msvv5QkDR48WHPmzJHT6VS/fv04fgoAAkSNDmi/9dZbNWPGDE2aNEkhISH+zgQ0eMXFxfrggw/kcrmUkZGh48ePq1GjRho3bpweeughTZ48WR06dLA7JgCgGjUqV/fee6/+8pe/aPbs2brxxht1xx13qFevXv7OBjQoBw8elMfjkcvl0ooVK1ReXq42bdpo8uTJSk1NVWJiopo1a2Z3TADAJdSoXCUmJioxMVGFhYV699135XQ61alTJ9111126/fbbOb4DuAxer1effvqpr1Bt3rxZknT11VdrypQpuueeezR8+HCFhXHGFAAIJjX+rX306FG9/fbbevvtt3Xddddp6tSpWrNmjRYtWqQlS5b4MyNQb5SVlWnVqlXyeDxyu93av3+/HA6Hhg8frueff16pqanq2bOn1q9fr/j4eLvjAgAuQ43K1c0336xdu3bphz/8of75z38qNjbWd/mIESP8GhAIdsePH1dmZqY8Ho8yMzN18uRJNW7cWImJifrZz36myZMnq23btnbHBAAYUqNyddddd2ny5MnnXFZaWqqIiAitW7fOL8GAYLZ3717f2dHXrFmjiooKtW3bVjfccIMsy9L48ePVuHFju2MCAPygRuVq7ty555Wr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tR/rx/mqm+VZr7zyiiIiIlRQUGBDsm80uHJ18OBBvfbaa1q3bp02bdqkyspKvffee3bHClrbtm3Tn/70J61Zs0Yff/yxPB6PvvjiC7tjBZXp06frww8/POeyl156SRMmTNDnn3+uCRMm6KWXXrIpXXCpbpbXXnut3n33XY0ZM8amVMGrunkmJiZq06ZN2rhxo6655hq9+OKLNqULPtXNc/bs2dq4caM2bNggp9OpX/ziFzalCy7VzVKS9u/fr6VLl6pLly42pPo/Da5cSVJlZaXOnDmjiooKFRcXKzY21u5IQWvHjh0aNmyYmjRporCwMI0dO1b/+te/7I4VVMaMGaNWrVqdc9mHH36oadOmSZKmTZum//znP3ZECzrVzbJPnz7q1auXTYmCW3XzTEpKUlhYmCRp+PDhOnjwoB3RglJ182zRooXv38XFxXI4HHUdKyhVN0tJeuyxx/TCCy/YPscGV646duyohx56SD169FDXrl0VFRWlpKQku2MFrWuvvVarV6/W0aNHVVxcrMWLF+vAgQN2xwp6R44c8ZX+9u3b68iRIzYnAs735z//WSkpKXbHCHrPPPOMrr76av3tb3/Ts88+a3ecoPWf//xHHTp00IABA+yO0vDK1fHjx+VyubRz507t3btXRUVFevvtt+2OFbT69OmjRx99VJZl6Xvf+54GDBig0NBQu2PVKw6Hw/b/Lwz4rl/96lcKCwvT1KlT7Y4S9J5//nnt2bNHU6dO1e9//3u74wSl4uJivfjiiwFTThtcuVq2bJm6deummJgYhYeHa8qUKQFzuvxgNXPmTOXk5CgrK0utWrXSNddcY3ekoNe2bVvl5eVJkvLy8hQTE2NzIuD//OUvf5HH49H//u//UvwNuu222/TBBx/YHSMoffnll9q7d6+GDh2qnj176sCBA4qPj9ehQ4dsydPgylXnzp21fv16FRcXy+v1Kjs7W71797Y7VlA7+5bVvn379K9//Uu33XabzYmCX2pqqhYtWiRJWrRokb73ve/ZnAj4RkZGhn7zm9/oH//4h5o0aWJ3nKC3e/du378//PBDjg+8TP369dOBAwe0a9cu7dq1S506dVJOTo7at29vS54GeRLR559/Xu+//77CwsIUFxenN954QxEREXbHCloTJkzQ0aNHFR4erhdffFETJkywO1JQmT59ulauXKmCggK1a9dOc+bM0fe//33dfvvt2r9/v7p06aK3335brVu3tjtqwKtulq1bt9bDDz+s/Px8tWzZUgMGDJDb7bY7alCobp4vvviiysrKfPvj/2/vjl2S2+M4jn+uShiCQ0oEUTSdOc8RHcKh+gcaapEIEjNaClpaaql/IKLCwhapkGiuJkMIIYyWhsoajnsINSVl9w5RcCmee3k4kk+9X6u/c77f85s+56f4jUQiWltb++JO/wyf7efR0ZHK5bJcLpe6u7u1urqqzs7Or2616X22l+Pj4++fG4ahYrGoYDD4Jf39yHAFAADQKD/ua0EAAIBGIlwBAAA4iHAFAADgIMIVAACAgwhXAAAADiJcAWgahmHItu3/HEll27ZCodBv17i7u/vf67PZrGZmZiRJS0tLymazSiaTKhQKv1UfwPdHuAIAAHAQ4QpA0wgGg3K73e/T7m3b1sDAgKLRqKLRBOr52AAAAixJREFU6Kejqur1uubm5hQKhWRZ1vsfWubzeUUiEZmmqVQqpVqt9n7N+vq6otGoTNPU1dWVJKlarWp4eFiWZSkWi+ni4uJDLZ/Pp9bWVvn9frW0tDRiCwB8A56vbgAA3hSLRUnS3t6epNcZiwcHB/J6vbq5udHY2NiHgJXJZFSpVFQqleTxeFStVvX4+KiJiQkdHh7KMAwlEgltbGxoenpakhQIBHR6eqp0Oq3l5WWl02ktLi6qt7dX+/v7Oj4+ViKRUKlU+let2dlZSdLIyEijtwLAH4yTKwBN6+npSVNTUzJNU/F4XJeXlx/W5PN5JZNJeTyv74ptbW0ql8vq6emRYRiSpNHRUZ2cnLxfMzQ0JEkyTVO2bUt6DXbxeFyS1N/fr2q1qoeHh0Y+HoBvipMrAE1rZWVF7e3tOjs708vLi/x+vyP3fZsl6na7Va/XHbknALzh5ApA07q/v1dHR4dcLpd2dnY+DUKDg4PKZDJ6fn6W9PrbKcMwVKlUdHt7K0na3d1VLBb7Za2+vj7lcjlJUqFQUCAQcCzMAfhZCFcAmtbk5KS2t7cVDod1fX0tn8/3YU0ikVBXV5csy1I4HFYul5PX69Xm5qbi8bhM05TL5VIqlfplrYWFBZ2fn8uyLM3Pz2tra6tRjwXgm/urVqv9/dVNAAAAfBecXAEAADiIcAUAAOAgwhUAAICDCFcAAAAOIlwBAAA4iHAFAADgIMIVAACAgwhXAAAADvoH/q2zifS7w1AAAAAASUVORK5CYII=
"
>
</div>

</div>

</div>
</div>

</div>