<?php

use Illuminate\Database\Seeder;

class AboutConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('pages')->insert([
            'about' => 'إذا كنت تبحث عن شاليه أو جناح خاصّ لقضاء إجازتك القريبة، فأنت في المكان الأمثل لذلك
                            موقعنا يطلعك على كلّ ما تجب معرفته في الطّريق لرحلات من تصميمك الخاصّ؛ تلائم توقّعاتك وتضمن لك الخصوصيّة والتّوفير.
                            تتوفّر المسابح والحدائق وغرف المعيشة ومعدّات الشّواء وترّاسات الاسترخاء وألعاب الأطفال في معظم الشّاليهات والكباين، وتقديم الفطور أو الوجبات وحتى خدمة الغرف فإنّها تقتصر على بعضها؛ وعمليًا فإنّ توافر بعضها أو جميعها هو ما يحدّد مستوى الشّاليه والمبلغ المطلوب مقابل فترة إقامتك فيه. ',
            'title1' => 'شروط الاتفاقية',
            'paragraph1' =>'عبر وصولك واستخدامك لموقع صيف كيف فإنك توافق على قبولك، من غير تعديل أو قيود أو شروط على جميع الأحكام والشروط الواردة في هذه الاتفاقية. أنت تقر وتضمن حقك القانوني للدخول في هذه الاتفاقية واستخدام الموقع وفقاً لجميع الشروط والأحكام المتواجدة هنا',
            'title2'=>'تعديل الشروط',
            'paragraph2'=>'يعمل  موقع صيف كيف قدر الإمكان على توفير المعلومات على الموقع بأكبر دقة ممكنة. مع ذلك، فإن بعض الأخطاء قد تحدث من وقت لآخر. إن  موقع صيف كيف وأي من شركائنا لا نتحمل أي مسؤولية عن أي خطأ في المعلومات التي يتضمنها الموقع',
            'title3'=>'شروط الحجز',
            'paragraph3'=>'عندما يتم الحجز عن طريق موقع صيف كيف ، فإنك تلتزم وتوافق كلياً على جميع شروط الحجز المفروضة من مكان الإقامة، والتي تضم قوانين الإلغاء وعدم الحضور، وأي شروط أخرى تفرض عليك أثناء الإقامة أو الحجز، بما في ذلك الخدمات المتاحة و/أو المنتجات التي يوفرها مكان الإقامة',
        ]);
    }
}
