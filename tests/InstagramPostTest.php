<?php

namespace Btechn01\LaravelInstagram\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Btechn01\LaravelInstagram\InstagramPost;

class InstagramPostTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $post = new InstagramPost();

        $post->post = json_decode('{"id":"2139163401979491177_3609056696","user":{"id":"3609056696","full_name":"Retinens","profile_picture":"https:\/\/scontent.cdninstagram.com\/vp\/048076e4ed95505691c806bef65c22c3\/5E57DE0C\/t51.2885-19\/s150x150\/29401574_383405102122833_5835669874365431808_n.jpg?_nc_ht=scontent.cdninstagram.com","username":"retinens.be"},"images":{"thumbnail":{"width":150,"height":150,"url":"https:\/\/scontent.cdninstagram.com\/vp\/db572b3bd40988a54dd74307dd9cb1ee\/5DC28DF6\/t51.2885-15\/e35\/c140.0.360.360a\/s150x150\/69342603_718171511982964_6445195742645500869_n.jpg?_nc_ht=scontent.cdninstagram.com"},"low_resolution":{"width":320,"height":180,"url":"https:\/\/scontent.cdninstagram.com\/vp\/49ef4c226305ca0648b6aef1eef7e0c2\/5DC243DA\/t51.2885-15\/e35\/s320x320\/69342603_718171511982964_6445195742645500869_n.jpg?_nc_ht=scontent.cdninstagram.com"},"standard_resolution":{"width":640,"height":360,"url":"https:\/\/scontent.cdninstagram.com\/vp\/0fd0c7d694525e94ad331243a829d086\/5DC26EA8\/t51.2885-15\/e35\/69342603_718171511982964_6445195742645500869_n.jpg?_nc_ht=scontent.cdninstagram.com"}},"created_time":"1569228183","caption":{"id":"17866860088488308","text":"D\u00e9composition de notre r\u00e9alisation pour des capsules vid\u00e9o pour le spectacle d\'@anonymdanceschool .\n.\n.\n.\n.\n#vfx #vfxbreakdown #makingof #retinens #visuals #2d #3d #behindthescenes #aftereffects #video #portal #videomaker #adobe #animation","created_time":"1569228183","from":{"id":"3609056696","full_name":"Retinens","profile_picture":"https:\/\/scontent.cdninstagram.com\/vp\/048076e4ed95505691c806bef65c22c3\/5E57DE0C\/t51.2885-19\/s150x150\/29401574_383405102122833_5835669874365431808_n.jpg?_nc_ht=scontent.cdninstagram.com","username":"retinens.be"}},"user_has_liked":false,"likes":{"count":7},"tags":["3d","behindthescenes","adobe","makingof","retinens","2d","animation","aftereffects","video","vfxbreakdown","videomaker","portal","visuals","vfx"],"filter":"Normal","comments":{"count":0},"type":"video","link":"https:\/\/www.instagram.com\/p\/B2v1cfDgPNp\/","location":null,"attribution":null,"users_in_photo":[],"videos":{"standard_resolution":{"width":640,"height":360,"url":"https:\/\/scontent.cdninstagram.com\/v\/t50.2886-16\/70582904_1360281550796803_1287446045002936780_n.mp4?_nc_ht=scontent.cdninstagram.com&oe=5DC23A46&oh=adeb35bbe5251a46a6cf011b178401c0","id":"17861691034503420"},"low_resolution":{"width":480,"height":270,"url":"https:\/\/scontent.cdninstagram.com\/v\/t50.2886-16\/71650628_127697085274603_6172045828028612960_n.mp4?_nc_ht=scontent.cdninstagram.com&oe=5DC273DD&oh=7c59e74160f1145e2b1370f97e902207","id":"17861691031503420"},"low_bandwidth":{"width":480,"height":270,"url":"https:\/\/scontent.cdninstagram.com\/v\/t50.2886-16\/71650628_127697085274603_6172045828028612960_n.mp4?_nc_ht=scontent.cdninstagram.com&oe=5DC273DD&oh=7c59e74160f1145e2b1370f97e902207","id":"17861691031503420"}},"video_views":30}');
        $post->save();
    }

    public function testGetLinkAttribute()
    {
        $this->assertEquals('https://www.instagram.com/p/B2v1cfDgPNp/', InstagramPost::first()->link);
    }

    public function testGetThumbnailImageUrlAttribute()
    {
        $this->assertEquals(
            'https://scontent.cdninstagram.com/vp/db572b3bd40988a54dd74307dd9cb1ee/5DC28DF6/t51.2885-15/e35/c140.0.360.360a/s150x150/69342603_718171511982964_6445195742645500869_n.jpg?_nc_ht=scontent.cdninstagram.com',
            InstagramPost::first()->thumbnailImageUrl
        );
    }

    public function testGetStandardResolutionImageUrlAttribute()
    {
        $this->assertEquals(
            'https://scontent.cdninstagram.com/vp/0fd0c7d694525e94ad331243a829d086/5DC26EA8/t51.2885-15/e35/69342603_718171511982964_6445195742645500869_n.jpg?_nc_ht=scontent.cdninstagram.com',
            InstagramPost::first()->standardResolutionImageUrl
        );
    }

    public function testGetCaptionTextAttribute()
    {
        $this->assertEquals(
            "Décomposition de notre réalisation pour des capsules vidéo pour le spectacle d'@anonymdanceschool .
.
.
.
.
#vfx #vfxbreakdown #makingof #retinens #visuals #2d #3d #behindthescenes #aftereffects #video #portal #videomaker #adobe #animation",
            InstagramPost::first()->captionText
        );
    }

    public function testGetHtmlCaptionTextAttribute()
    {
        $this->assertEquals(
            "Décomposition de notre réalisation pour des capsules vidéo pour le spectacle d'@anonymdanceschool .<br />
.<br />
.<br />
.<br />
.<br />
#vfx #vfxbreakdown #makingof #retinens #visuals #2d #3d #behindthescenes #aftereffects #video #portal #videomaker #adobe #animation",
            InstagramPost::first()->htmlCaptionText
        );
    }
}
