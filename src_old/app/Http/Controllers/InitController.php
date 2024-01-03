<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Redis;
use Laravel\Lumen\Http\ResponseFactory;

/**
 * やけっぱちseedデータ生成 in 2023.
 */
class InitController extends Controller
{
    public function handle(): JsonResponse
    {
        $response = new ResponseFactory();
        $json = '
{
  "data": [
    {
      "id": 0,
      "title": "ex",
      "content": "Officia in et consectetur qui eiusmod adipisicing sunt ex officia nisi. Ex quis aute pariatur elit qui reprehenderit. Tempor irure sit est reprehenderit laboris. Qui aute commodo ex anim sunt non aute fugiat amet ullamco cupidatat nulla. Incididunt do quis velit sunt qui excepteur labore eu sit culpa occaecat mollit elit laborum. Cillum dolore ex pariatur excepteur in commodo sit enim aliqua. Sint veniam occaecat pariatur qui aliquip occaecat.\r\n",
      "createdAt": "2016-02-07T03:30:05 -09:00",
      "updatedAt": "2016-09-29T01:15:57 -09:00"
    },
    {
      "id": 1,
      "title": "aliquip",
      "content": "Esse do ea voluptate aliqua laborum ipsum ipsum nostrud id in qui ullamco. Est pariatur quis commodo ex. Magna qui cillum mollit aliqua excepteur exercitation cillum aliquip esse. Aute aute voluptate adipisicing laborum ullamco aliqua laboris irure dolor nostrud laborum. Sit aute officia ullamco excepteur labore duis amet consectetur dolor aliquip Lorem aliqua cupidatat.\r\n",
      "createdAt": "2019-03-28T05:27:44 -09:00",
      "updatedAt": "2019-09-30T03:38:08 -09:00"
    },
    {
      "id": 2,
      "title": "incididunt",
      "content": "Cupidatat reprehenderit laboris duis consequat enim. Lorem fugiat ut magna do non aliquip magna ullamco officia ut. In irure amet commodo fugiat eu laborum excepteur. Sint proident incididunt occaecat duis cupidatat duis laboris consequat aliquip pariatur id anim eiusmod amet.\r\n",
      "createdAt": "2023-04-30T10:29:05 -09:00",
      "updatedAt": "2022-05-24T07:16:04 -09:00"
    },
    {
      "id": 3,
      "title": "velit",
      "content": "Aliquip tempor aliquip laboris voluptate. Excepteur id nostrud officia aliqua ea deserunt ex nisi qui ea quis quis. Ut do est enim dolore Lorem mollit pariatur duis et eu commodo eiusmod. Dolor enim ex id duis voluptate nulla et dolore aliquip eu non reprehenderit amet.\r\n",
      "createdAt": "2018-08-24T07:23:20 -09:00",
      "updatedAt": "2019-07-02T03:17:06 -09:00"
    },
    {
      "id": 4,
      "title": "do",
      "content": "Ad culpa amet nostrud nostrud. Aute laboris deserunt ipsum adipisicing eiusmod cupidatat minim incididunt magna. Consectetur elit excepteur adipisicing eiusmod eiusmod mollit. Deserunt irure consectetur incididunt sit amet anim aute esse officia ad. Reprehenderit pariatur veniam aliqua fugiat non nisi est eiusmod anim reprehenderit. Anim nostrud labore in incididunt eiusmod voluptate qui. Reprehenderit eu ut commodo dolore tempor in anim.\r\n",
      "createdAt": "2017-03-15T04:40:27 -09:00",
      "updatedAt": "2019-03-22T02:27:18 -09:00"
    },
    {
      "id": 5,
      "title": "velit",
      "content": "Ullamco pariatur magna ut id excepteur aliqua. In et officia sunt velit esse ad eiusmod incididunt aliquip velit nulla incididunt. Nisi proident do pariatur quis non sunt ad irure aliqua. Ex amet deserunt voluptate magna fugiat dolor consequat nostrud.\r\n",
      "createdAt": "2015-04-10T01:21:49 -09:00",
      "updatedAt": "2017-07-15T06:08:04 -09:00"
    },
    {
      "id": 6,
      "title": "nulla",
      "content": "Anim minim id elit ad cupidatat eiusmod elit eu aliqua ad sint sit. Qui aliqua proident magna laborum consectetur in reprehenderit minim laboris officia labore veniam. Culpa officia cillum ea laborum commodo adipisicing aliquip. Irure nostrud pariatur officia fugiat et anim excepteur occaecat commodo est consequat qui. Qui aute commodo minim non exercitation irure.\r\n",
      "createdAt": "2016-06-16T05:36:39 -09:00",
      "updatedAt": "2021-08-23T01:04:42 -09:00"
    },
    {
      "id": 7,
      "title": "cillum",
      "content": "Quis in enim fugiat elit consectetur ad esse cillum nulla cupidatat ad eu. Consequat anim duis veniam commodo non consectetur culpa velit magna ullamco do. Qui veniam fugiat labore reprehenderit duis mollit reprehenderit ex qui non duis enim. Commodo duis deserunt dolore dolor tempor esse culpa mollit. Id mollit dolore proident incididunt Lorem. Duis aute deserunt veniam fugiat fugiat magna deserunt do labore consectetur cillum Lorem.\r\n",
      "createdAt": "2021-04-29T05:43:49 -09:00",
      "updatedAt": "2015-05-25T05:28:16 -09:00"
    },
    {
      "id": 8,
      "title": "nulla",
      "content": "Proident esse et nulla amet ad dolore amet qui pariatur. Eu sit quis eu mollit. Commodo do qui aliqua sunt.\r\n",
      "createdAt": "2020-08-12T04:27:33 -09:00",
      "updatedAt": "2015-12-10T05:58:15 -09:00"
    },
    {
      "id": 9,
      "title": "ut",
      "content": "Amet ut mollit consequat eiusmod. Mollit consectetur ullamco dolore dolor ea ea sit. Anim cillum qui enim minim veniam ad aute sint. Culpa ad nisi nisi ipsum veniam. Velit consequat dolor amet amet. Non ex incididunt reprehenderit velit sit quis qui aliquip incididunt dolore aute officia.\r\n",
      "createdAt": "2014-03-30T09:35:06 -09:00",
      "updatedAt": "2022-10-17T03:56:42 -09:00"
    },
    {
      "id": 10,
      "title": "reprehenderit",
      "content": "Et proident reprehenderit culpa nulla non veniam. Fugiat officia non non ipsum. Excepteur ex do velit non Lorem exercitation sunt ut do voluptate enim voluptate eu. Deserunt sit pariatur nostrud culpa sit sunt esse tempor reprehenderit aliquip do. Quis quis non quis ea. Eiusmod magna velit non minim occaecat consequat adipisicing.\r\n",
      "createdAt": "2016-12-30T12:20:17 -09:00",
      "updatedAt": "2015-01-21T10:45:01 -09:00"
    },
    {
      "id": 11,
      "title": "adipisicing",
      "content": "Dolor tempor consequat magna aliqua dolore eu qui enim sint duis qui nostrud Lorem. Nostrud occaecat cillum eiusmod cillum sit quis nisi in nulla deserunt minim ipsum reprehenderit. Eiusmod eiusmod magna eu nostrud non amet aliquip anim. Ad deserunt duis dolor in. Ut mollit nulla incididunt laborum. Laboris voluptate eiusmod anim consectetur mollit consectetur. Magna officia anim officia duis velit Lorem velit culpa eiusmod.\r\n",
      "createdAt": "2021-12-04T11:16:16 -09:00",
      "updatedAt": "2016-07-22T10:32:45 -09:00"
    },
    {
      "id": 12,
      "title": "ullamco",
      "content": "Cillum est dolor Lorem amet minim elit laboris nisi occaecat exercitation. Incididunt dolor ex duis commodo excepteur reprehenderit elit et irure ad amet consectetur. Labore ad eu reprehenderit magna in. Magna proident consequat excepteur nulla do et officia.\r\n",
      "createdAt": "2014-07-03T08:56:14 -09:00",
      "updatedAt": "2014-02-04T07:29:19 -09:00"
    },
    {
      "id": 13,
      "title": "ullamco",
      "content": "Eu est qui cupidatat Lorem nostrud magna irure eu tempor Lorem eiusmod. Duis magna exercitation laborum non voluptate voluptate. Cupidatat veniam labore sit cillum ex amet culpa nulla. Ut culpa irure cillum ea aliquip ex ea commodo esse cillum labore velit aliqua officia. Id consectetur sint sit sunt exercitation nulla deserunt. Ullamco ullamco sit incididunt cillum culpa laboris.\r\n",
      "createdAt": "2018-02-21T01:43:21 -09:00",
      "updatedAt": "2016-05-06T11:26:56 -09:00"
    },
    {
      "id": 14,
      "title": "ex",
      "content": "Laborum qui officia eu commodo adipisicing in aliquip dolore cupidatat consequat duis. Aliquip cupidatat nulla velit veniam tempor ad quis. Laborum eu quis qui ut quis do id cillum commodo sunt consequat laboris. Dolor incididunt ut duis dolor Lorem elit in pariatur eiusmod sunt laboris sit. Aliqua fugiat officia sint minim ad excepteur eu Lorem nulla ad id Lorem nostrud dolor. Consequat ullamco commodo incididunt excepteur. Reprehenderit est culpa et aute nostrud do.\r\n",
      "createdAt": "2015-12-09T03:58:57 -09:00",
      "updatedAt": "2018-01-26T04:30:41 -09:00"
    },
    {
      "id": 15,
      "title": "mollit",
      "content": "Enim cupidatat enim quis qui cupidatat tempor enim. Ad ut pariatur ipsum amet tempor nulla occaecat. Incididunt enim nostrud ullamco mollit dolore. Duis labore anim aute sit qui excepteur incididunt.\r\n",
      "createdAt": "2019-07-18T11:02:45 -09:00",
      "updatedAt": "2014-07-25T03:52:05 -09:00"
    },
    {
      "id": 16,
      "title": "proident",
      "content": "Laboris irure et non deserunt occaecat tempor Lorem deserunt incididunt tempor minim ea in anim. Velit occaecat anim excepteur minim fugiat eu. Quis aute eiusmod mollit sit officia irure non elit enim voluptate sit. Consectetur eu non anim sint dolor. Qui irure ut qui ad do. Ea quis officia labore nisi do consectetur sint nostrud minim ut ipsum.\r\n",
      "createdAt": "2019-09-27T07:48:58 -09:00",
      "updatedAt": "2018-07-01T09:58:14 -09:00"
    },
    {
      "id": 17,
      "title": "in",
      "content": "Anim eu tempor irure adipisicing. Do ea voluptate veniam veniam do. Elit eu excepteur exercitation id aute eiusmod ex sint aute non ut. Voluptate laborum culpa ad in do anim nisi id aliqua laborum do irure consequat ea. Sunt do aliqua exercitation ullamco quis.\r\n",
      "createdAt": "2020-10-18T02:10:10 -09:00",
      "updatedAt": "2016-09-04T09:14:04 -09:00"
    },
    {
      "id": 18,
      "title": "consequat",
      "content": "Minim excepteur voluptate nisi sunt non irure consequat eu ut commodo. Cillum nostrud minim sunt esse sint consequat aliquip quis deserunt culpa fugiat sint enim. Amet ut commodo anim do irure irure deserunt consectetur ut non quis ut. Et occaecat non sit eu duis laboris culpa occaecat commodo consectetur consectetur. Proident dolor eiusmod ut cillum eiusmod dolor fugiat et. Dolor ea et commodo ea aute enim do anim reprehenderit ea.\r\n",
      "createdAt": "2016-04-11T10:43:35 -09:00",
      "updatedAt": "2017-11-22T05:30:23 -09:00"
    },
    {
      "id": 19,
      "title": "ipsum",
      "content": "Voluptate commodo sunt deserunt elit quis nulla nulla ullamco. Duis laboris sit voluptate irure cillum. Minim pariatur excepteur eiusmod reprehenderit consequat esse fugiat. Deserunt commodo enim in voluptate est in ullamco consequat fugiat qui.\r\n",
      "createdAt": "2023-09-22T02:06:10 -09:00",
      "updatedAt": "2015-03-11T10:51:26 -09:00"
    },
    {
      "id": 20,
      "title": "culpa",
      "content": "Magna sunt voluptate mollit incididunt ut sunt do minim enim ullamco. Consequat ad nostrud non est do exercitation proident sit. Tempor sit consectetur qui fugiat consequat adipisicing anim labore cupidatat ea velit do ut.\r\n",
      "createdAt": "2015-10-14T03:36:36 -09:00",
      "updatedAt": "2014-01-31T07:01:23 -09:00"
    },
    {
      "id": 21,
      "title": "pariatur",
      "content": "Sit nulla quis amet velit sint cupidatat consectetur laborum ullamco sit proident velit. Ex ex irure ipsum nostrud adipisicing eiusmod. Veniam labore fugiat dolor minim aliqua irure dolore adipisicing cillum anim. Fugiat est laborum consequat quis commodo dolore proident ad est in magna. Non ad id ad est incididunt amet. Est velit est quis sunt ex tempor.\r\n",
      "createdAt": "2019-03-15T08:23:40 -09:00",
      "updatedAt": "2015-05-13T07:08:26 -09:00"
    },
    {
      "id": 22,
      "title": "enim",
      "content": "Commodo sunt in labore laboris sit elit aute. Commodo proident deserunt aliquip do consectetur duis. Nostrud exercitation velit id ullamco labore do in sit ipsum. Anim mollit labore laborum eu eiusmod duis deserunt magna pariatur dolor dolore ut cupidatat quis. Id cillum eiusmod aute voluptate elit eu aliqua. Culpa consequat laboris ad non.\r\n",
      "createdAt": "2023-11-11T09:41:48 -09:00",
      "updatedAt": "2014-05-31T02:13:25 -09:00"
    },
    {
      "id": 23,
      "title": "elit",
      "content": "Voluptate mollit qui adipisicing duis quis magna aliquip aute magna duis elit sint adipisicing qui. Irure veniam reprehenderit ex nulla elit. Sit aute officia sit et minim ut commodo amet officia. Pariatur sunt nostrud ad sunt laboris duis nulla cillum sit irure nulla ipsum. Nostrud aute occaecat cillum qui non reprehenderit cillum nisi commodo et pariatur ut ea.\r\n",
      "createdAt": "2020-11-20T01:32:03 -09:00",
      "updatedAt": "2017-05-28T10:50:25 -09:00"
    },
    {
      "id": 24,
      "title": "irure",
      "content": "Ea Lorem aliqua sunt anim culpa ad ad dolor nulla cillum ipsum laborum ullamco commodo. In ullamco exercitation consequat nisi do pariatur sit velit nisi adipisicing. Adipisicing consectetur ea officia laborum irure officia esse. Exercitation qui fugiat ullamco reprehenderit dolore ad reprehenderit et est reprehenderit velit qui. Ut sit labore commodo nisi laboris. Cupidatat magna cupidatat nisi esse velit deserunt velit esse nisi sit commodo id nostrud.\r\n",
      "createdAt": "2018-06-15T08:59:06 -09:00",
      "updatedAt": "2016-12-06T04:36:41 -09:00"
    },
    {
      "id": 25,
      "title": "magna",
      "content": "Cupidatat anim incididunt consequat excepteur minim sunt. Non amet aute irure et ullamco tempor dolor. Deserunt ea ea eu Lorem aute ea minim eiusmod dolore do officia ea duis qui. Est dolor ad laborum pariatur aliqua ad enim anim aliqua ex.\r\n",
      "createdAt": "2016-06-22T06:17:24 -09:00",
      "updatedAt": "2014-05-14T04:20:35 -09:00"
    },
    {
      "id": 26,
      "title": "Lorem",
      "content": "Aliqua exercitation consequat ullamco irure irure minim mollit laboris et amet aute. Commodo est laborum esse cillum non labore occaecat qui ad amet reprehenderit. Ea in incididunt et et enim non quis est dolor cupidatat non pariatur et quis. Ipsum sunt Lorem amet dolore.\r\n",
      "createdAt": "2023-02-14T11:39:29 -09:00",
      "updatedAt": "2018-07-15T09:52:52 -09:00"
    },
    {
      "id": 27,
      "title": "reprehenderit",
      "content": "Enim quis reprehenderit sunt deserunt incididunt dolore esse tempor anim dolor sit cillum nostrud irure. Elit sint quis elit do incididunt exercitation cillum aliquip culpa ad ea id aute nulla. Tempor nostrud ut ea in ipsum elit qui voluptate laboris eiusmod laborum cillum irure. Commodo ullamco sint fugiat amet est exercitation officia minim amet culpa. Aliqua est pariatur irure laborum sint tempor magna nulla sunt. Sint in dolore dolore aute nostrud cillum ex non excepteur consequat aliqua eiusmod ipsum fugiat. Aliqua consectetur qui ea velit Lorem aute ut commodo id.\r\n",
      "createdAt": "2014-12-24T03:39:38 -09:00",
      "updatedAt": "2018-01-27T04:52:19 -09:00"
    },
    {
      "id": 28,
      "title": "officia",
      "content": "Esse pariatur et eu ad cillum irure officia aliqua ipsum commodo. Ea dolor et et officia nulla officia irure esse magna magna enim minim sint. Elit fugiat amet adipisicing nisi do anim eu ex nostrud et. Cupidatat adipisicing irure consequat qui ex magna pariatur sint minim dolor amet elit nostrud. Commodo ad nisi aliquip incididunt minim reprehenderit anim. Magna sint veniam enim consectetur exercitation do enim enim.\r\n",
      "createdAt": "2018-12-31T12:44:30 -09:00",
      "updatedAt": "2016-11-19T08:50:49 -09:00"
    },
    {
      "id": 29,
      "title": "amet",
      "content": "Nostrud quis incididunt aliqua voluptate. Voluptate veniam elit velit ut nisi minim adipisicing. Consectetur do ad occaecat deserunt anim deserunt est amet fugiat excepteur. Consequat ad ad anim esse incididunt voluptate quis quis voluptate ut fugiat adipisicing ullamco sint. Quis aute cupidatat eiusmod esse eiusmod est sit minim irure et aute nulla ullamco exercitation. Quis deserunt eiusmod sit occaecat eiusmod duis minim deserunt ea dolore laboris tempor.\r\n",
      "createdAt": "2021-08-28T12:39:36 -09:00",
      "updatedAt": "2018-09-19T01:34:45 -09:00"
    },
    {
      "id": 30,
      "title": "proident",
      "content": "Enim ut ea proident sunt commodo amet ex elit eu labore magna et deserunt ullamco. Nostrud proident tempor nisi aliquip nostrud id ex magna est commodo. Dolor sit eiusmod sint qui ullamco quis nostrud. Excepteur sit ipsum voluptate anim. Et cupidatat officia elit aliqua excepteur tempor ullamco mollit quis adipisicing occaecat consectetur.\r\n",
      "createdAt": "2021-10-11T09:04:45 -09:00",
      "updatedAt": "2022-04-20T10:14:09 -09:00"
    },
    {
      "id": 31,
      "title": "amet",
      "content": "Laboris mollit elit do minim est amet nisi non cupidatat nulla reprehenderit adipisicing dolor amet. Ad nostrud eu non veniam amet deserunt Lorem aute culpa consequat. Non sunt consequat amet in. Eiusmod sit deserunt occaecat reprehenderit laboris Lorem do et. Culpa dolore velit laborum quis anim consectetur fugiat est. In tempor sunt amet deserunt deserunt ex tempor veniam enim labore occaecat sit in. Lorem nisi culpa dolore elit incididunt elit non sunt ipsum ea laborum.\r\n",
      "createdAt": "2019-04-22T03:33:46 -09:00",
      "updatedAt": "2016-04-05T07:05:15 -09:00"
    },
    {
      "id": 32,
      "title": "aliqua",
      "content": "Sint nulla nulla nulla fugiat laboris officia ut do sunt culpa et aute pariatur. Magna tempor labore occaecat velit ex proident consequat non. Minim fugiat eu minim commodo est nostrud veniam qui commodo officia.\r\n",
      "createdAt": "2018-06-27T11:37:59 -09:00",
      "updatedAt": "2022-06-06T09:42:41 -09:00"
    },
    {
      "id": 33,
      "title": "enim",
      "content": "Ut qui culpa tempor labore. Incididunt nulla consequat adipisicing pariatur ut anim anim qui culpa laborum magna ex proident consectetur. Amet aliqua officia anim cupidatat exercitation consectetur officia cupidatat tempor laboris. Consectetur consequat adipisicing laboris et. Eu exercitation eiusmod tempor elit enim id ad. Reprehenderit dolore est fugiat do. Esse aliqua magna mollit consequat incididunt aute non.\r\n",
      "createdAt": "2023-03-07T05:43:33 -09:00",
      "updatedAt": "2014-03-30T12:04:18 -09:00"
    },
    {
      "id": 34,
      "title": "consectetur",
      "content": "Quis adipisicing aliquip anim dolore. Eu amet culpa dolore quis mollit et tempor aliqua ex dolor enim commodo velit exercitation. Ipsum officia et cupidatat cillum labore do incididunt. Commodo sunt nostrud irure cupidatat id velit occaecat quis. Eu in tempor minim ex commodo. Aliquip ullamco incididunt in aliquip duis magna ad consequat eu duis. Nulla quis pariatur ipsum incididunt esse velit ad eu laboris reprehenderit nulla consectetur elit.\r\n",
      "createdAt": "2019-10-16T08:15:00 -09:00",
      "updatedAt": "2021-02-04T06:09:05 -09:00"
    },
    {
      "id": 35,
      "title": "officia",
      "content": "Excepteur est excepteur laborum amet. Ea exercitation adipisicing eiusmod cupidatat ullamco incididunt. Est quis incididunt ea do ut. Excepteur in exercitation culpa enim proident.\r\n",
      "createdAt": "2014-11-20T02:08:11 -09:00",
      "updatedAt": "2020-06-06T07:22:46 -09:00"
    },
    {
      "id": 36,
      "title": "est",
      "content": "Dolore labore nulla tempor sit eu dolor ad exercitation minim proident exercitation Lorem enim mollit. Minim minim eu excepteur id. Cillum culpa ex dolor sint eiusmod irure. Sit sunt nulla aute sint.\r\n",
      "createdAt": "2021-07-21T02:59:10 -09:00",
      "updatedAt": "2014-01-09T05:06:11 -09:00"
    },
    {
      "id": 37,
      "title": "consectetur",
      "content": "Culpa quis in deserunt minim nostrud magna velit reprehenderit cupidatat nostrud cillum dolor aliqua. Cupidatat fugiat aliquip quis est est cillum eu dolore in laborum ipsum anim consectetur do. Officia magna exercitation ut nulla velit eu veniam sit quis labore irure ipsum. Ut voluptate qui minim cillum amet anim in consectetur elit qui elit velit. Ut eu ad irure nulla anim non cillum.\r\n",
      "createdAt": "2017-06-21T07:47:27 -09:00",
      "updatedAt": "2014-10-26T03:56:47 -09:00"
    },
    {
      "id": 38,
      "title": "nulla",
      "content": "Nulla eu nisi deserunt minim commodo sunt culpa culpa. Sunt mollit qui consectetur reprehenderit amet dolor est voluptate excepteur reprehenderit anim. Tempor duis id est ut consequat cupidatat magna non. Incididunt aute veniam qui tempor irure duis voluptate qui tempor tempor. Adipisicing ut tempor in consectetur nisi cupidatat ad non do labore consequat amet occaecat.\r\n",
      "createdAt": "2020-06-29T04:42:11 -09:00",
      "updatedAt": "2016-07-19T10:15:00 -09:00"
    },
    {
      "id": 39,
      "title": "sunt",
      "content": "Velit pariatur consectetur velit quis minim sit reprehenderit consectetur. Ea enim amet voluptate exercitation. Reprehenderit non dolore enim duis nulla amet dolore mollit laborum sunt officia reprehenderit reprehenderit. Nisi velit id aliqua reprehenderit ullamco. Elit minim cillum laborum elit enim magna quis est duis in excepteur qui. Elit sunt occaecat velit proident.\r\n",
      "createdAt": "2023-07-24T01:33:35 -09:00",
      "updatedAt": "2017-03-01T12:06:14 -09:00"
    },
    {
      "id": 40,
      "title": "est",
      "content": "Est cupidatat commodo aliquip labore pariatur aute dolor qui esse veniam laborum laborum non. Cillum aute in enim voluptate commodo. Amet tempor eu amet ea ipsum commodo ea proident sit fugiat nisi velit amet cupidatat. Nisi excepteur adipisicing laboris duis deserunt sint aliquip ullamco aute mollit ullamco consectetur aliquip nostrud. Dolore ea nisi tempor deserunt voluptate qui nostrud exercitation non veniam.\r\n",
      "createdAt": "2021-05-25T05:59:22 -09:00",
      "updatedAt": "2022-02-06T04:49:10 -09:00"
    }
  ]
}';

        $decoded = json_decode($json, true);
        foreach ($decoded['data'] as $index => $value) {
            Redis::set(
                "{$index}",
                "{
                    'id': {$value['id']},
                    'title': {$value['title']},
                    'content': {$value['content']},
                    'createdAt':{$value['createdAt']},
                    'updatedAt':{$value['updatedAt']},
                }"
            );
        }

        return $response
            ->json([
                'status' => 'returned',
            ])
        ;
    }
}
