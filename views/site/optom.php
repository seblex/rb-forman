<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $article->title;
$this->params['breadcrumbs'][] = $article->title;

$this->registerMetaTag([
    'name' => 'description',
    'content' => $article->description
]);

$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $article->keywords
]);
?>
<?= $article->text ?>
<table align="center">
	<tbody>
		<tr align="center">
			<td align="center">
				<a href="<?= Url::to('optom/keramogranit-optom') ?>">
					<img src="/images/glav/1.png" width="250" />
				</a>
			</td>
			<td align="center">
				<img src="/images/glav/3.png" width="250" />
			</td>
			<td align="center">
				<a href="<?= Url::to('optom/suhie-stroitelnie-smesi-optom') ?> ">
					<img src="/images/glav/4.png" height="250" />
				</a>
			</td>
		</tr>
		<tr align="center">
			<td style="text-align: center;">
				<p><span style="font-size: 12pt;">
					<a href="<?= Url::to('optom/keramogranit-optom') ?>">Керамогранит</a>
				</span></p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</td>
			<td style="text-align: center;">
				<p><span style="font-size: 12pt;">Керамическая плитка</span></p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</td>
			<td style="text-align: center;">
				<p><span style="font-size: 12pt;">
					<a href="<?= Url::to('optom/suhie-stroitelnie-smesi-optom') ?>">Сухие строительные смеси</a>
				</span></p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr align="center">
			<td align="center">
				<a href="<?= Url::to('optom/uteplitel-optom') ?>">
					<img src="/images/glav/14.png" height="200" />
				</a>
			</td>
			<td align="center">
				<a href="<?= Url::to('optom/gruntovka-optom') ?>">
					<img src="/images/glav/baraban_png.png" height="200" width="200" alt="baraban png" />
				</a>
			</td>
			<td align="center">
				<a href="<?= Url::to('optom/kraska-optom') ?>">
					<img src="/images/glav/6.png" height="200" />
				</a>
			</td>
		</tr>
		<tr align="center">
			<td style="text-align: center;">
				<p><span style="font-size: 12pt;">
					<a href="<?= Url::to('optom/uteplitel-optom') ?>">Утеплитель</a>
				</span></p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</td>
			<td style="text-align: center;">
				<p><span style="font-size: 12pt;">
					<a href="<?= Url::to('optom/gruntovka-optom') ?>">Грунты</a>
				</span></p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</td>
			<td style="text-align: center;">
				<p><span style="font-size: 12pt;">
					<a href="<?= Url::to('optom/kraska-optom') ?>">Краски</a>
				</span></p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</td>
		</tr>
		<tr align="center">
			<td align="center">
				<a href="<?= Url::to('optom/laminat-optom') ?>">
					<img src="/images/glav/7.png" height="200" />
				</a>
			</td>
			<td align="center">
				<a href="<?= Url::to('optom/gipsokarton-optom') ?>">
					<img src="/images/glav/13.png" height="200" />
				</a>
			</td>
			<td align="center">
				<a href="<?= Url::to('optom/fanera-optom') ?>">
					<img src="images/fanera/FK.png" height="200" />
				</a>
			</td>
		</tr>
		<tr align="center">
			<td style="text-align: center;">
				<p><span style="font-size: 12pt;">
					<a href="<?= Url::to('optom/laminat-optom') ?>">Ламинат</a>
				</span></p>
				<p>&nbsp;</p>
			</td>
			<td style="text-align: center;">
				<p><span style="font-size: 12pt;">
					<a href="<?= Url::to('optom/gipsokarton-optom') ?>">Гипсокартон</a>
				</span></p>
				<p>&nbsp;</p>
			</td>
			<td style="text-align: center;">
				<p>
					<a href="<?= Url::to('optom/fanera-optom') ?>"><span style="font-size: 12pt;">Фанера</span></a>
				</p>
				<p>&nbsp;</p>
			</td>
		</tr>
	</tbody>
</table>

