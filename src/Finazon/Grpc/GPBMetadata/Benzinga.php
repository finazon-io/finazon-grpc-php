<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: benzinga.proto

namespace Finazon\Grpc\GPBMetadata;

class Benzinga
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa01d0a0e62656e7a696e67612e70726f746f120766696e617a6f6e22fd010a1b4765744469766964656e747343616c656e64617252657175657374120e0a067469636b6572180120012809120c0a046461746518022001280912100a0873746172745f6174180320012803120e0a06656e645f6174180420012803120c0a047061676518052001280512110a09706167655f73697a65180620012805120d0a056f72646572180720012809120b0a03637173180820012809120b0a0363696b180920012809120d0a056375736970180a20012809120c0a046973696e180b2001280912160a0e636f6d706f736974655f66696769180c2001280912120a0a73686172655f66696769180d20012809120b0a036c6569180e20012809224e0a1c4765744469766964656e747343616c656e646172526573706f6e7365122e0a06726573756c7418012003280b321e2e66696e617a6f6e2e4469766964656e747343616c656e6461724974656d2284030a154469766964656e747343616c656e6461724974656d12110a097265636f72645f6964180120012809120e0a067469636b6572180220012809120c0a046e616d65180320012809120b0a036d696318042001280912100a0863757272656e637918052001280912180a1065785f6469766964656e645f6461746518062001280912150a0d6469766964656e645f7479706518072001280912100a086469766964656e6418082001280112160a0e6469766964656e645f7969656c6418092001280112160a0e6469766964656e645f7072696f72180a2001280912180a106465636c61726174696f6e5f64617465180b2001280912140a0c70617961626c655f64617465180c2001280912130a0b7265636f72645f64617465180d20012809121c0a14656e645f726567756c61725f6469766964656e64180e2001280812110a096672657175656e6379180f2001280512120a0a696d706f7274616e6365181020012805120d0a056e6f746573181120012809120f0a077570646174656418122001280322fc010a1a4765744561726e696e677343616c656e64617252657175657374120e0a067469636b6572180120012809120c0a046461746518022001280912100a0873746172745f6174180320012803120e0a06656e645f6174180420012803120c0a047061676518052001280512110a09706167655f73697a65180620012805120d0a056f72646572180720012809120b0a03637173180820012809120b0a0363696b180920012809120d0a056375736970180a20012809120c0a046973696e180b2001280912160a0e636f6d706f736974655f66696769180c2001280912120a0a73686172655f66696769180d20012809120b0a036c6569180e20012809224c0a1b4765744561726e696e677343616c656e646172526573706f6e7365122d0a06726573756c7418012003280b321d2e66696e617a6f6e2e4561726e696e677343616c656e6461724974656d22c9040a144561726e696e677343616c656e6461724974656d12100a0863757272656e6379180120012809120c0a046461746518022001280912160a0e646174655f636f6e6669726d6564180320012808122e0a0365707318042001280b32212e66696e617a6f6e2e4561726e696e677343616c656e6461724974656d2e45707312120a0a696d706f7274616e6365180520012805120b0a036d6963180620012809120c0a046e616d65180720012809120d0a056e6f746573180820012809120e0a06706572696f6418092001280912130a0b706572696f645f79656172180a2001280512110a097265636f72645f6964180b2001280912360a07726576656e7565180c2001280b32252e66696e617a6f6e2e4561726e696e677343616c656e6461724974656d2e526576656e7565120e0a067469636b6572180d20012809120c0a0474696d65180e20012809120f0a0775706461746564180f200128031a730a0345707312110a09657374696d61746564180120012801120d0a057072696f7218022001280112100a087265706f7274656418032001280112100a08737572707269736518042001280112180a1073757270726973655f70657263656e74180520012801120c0a04747970651806200128091a770a07526576656e756512110a09657374696d61746564180120012801120d0a057072696f7218022001280112100a087265706f7274656418032001280112100a08737572707269736518042001280112180a1073757270726973655f70657263656e74180520012801120c0a047479706518062001280922f0010a0e4765744e65777352657175657374120e0a067469636b6572180120012809120c0a046461746518022001280912100a0873746172745f6174180320012803120e0a06656e645f6174180420012803120c0a047061676518052001280512110a09706167655f73697a65180620012805120d0a056f72646572180720012809120b0a03637173180820012809120b0a0363696b180920012809120d0a056375736970180a20012809120c0a046973696e180b2001280912160a0e636f6d706f736974655f66696769180c2001280912120a0a73686172655f66696769180d20012809120b0a036c6569180e2001280922340a0f4765744e657773526573706f6e736512210a06726573756c7418012003280b32112e66696e617a6f6e2e4e6577734974656d22ea010a084e6577734974656d120e0a06617574686f7218012001280912100a086368616e6e656c73180220032809122e0a0a637265617465645f617418032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120e0a06696d6167657318042003280912110a097265636f72645f6964180520012805120c0a0474616773180620032809120f0a077469636b657273180720032809120d0a057469746c65180820012809122e0a0a757064617465645f617418092001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120b0a0375726c180a2001280922730a0d47657449504f5265717565737412100a0873746172745f6174180320012803120e0a06656e645f6174180420012803120c0a047061676518052001280512110a09706167655f73697a65180620012805120d0a056f7264657218072001280912100a0865786368616e6765180f2001280922300a0e47657449504f526573706f6e7365121e0a0469706f7318012003280b32102e66696e617a6f6e2e49504f4974656d22c3070a0749504f4974656d12110a097265636f72645f6964180120012809120e0a067469636b6572180220012809120c0a046e616d65180320012809120b0a036d696318042001280912100a0863757272656e6379180520012809120c0a0464617465180620012809121a0a126f70656e5f646174655f7665726966696564180720012808120c0a0474696d6518082001280912110a0970726963655f6d617818092001280112110a0970726963655f6d696e180a2001280112120a0a70726963655f6f70656e180b20012801121d0a1570726963655f7075626c69635f6f66666572696e67180c2001280112170a0f6f66666572696e675f736861726573180d20012801121f0a176f66666572696e675f7368617265735f6f72645f616472180e2001280112160a0e6f66666572696e675f76616c7565180f2001280112220a1a6f72645f7368617265735f6f75745f61667465725f6f66666572181020012801121b0a136d61726b65745f6361705f61745f6f6666657218112001280112130a0b6465616c5f737461747573181220012809121b0a13696e697469616c5f66696c696e675f64617465181320012809121b0a13696e73696465725f6c6f636b75705f64617465181420012809121b0a13696e73696465725f6c6f636b75705f6461797318152001280512100a0869706f5f7479706518162001280912160a0e6c6173745f79725f696e636f6d65181720012801121b0a136c6173745f79725f696e636f6d655f7965617218182001280112170a0f6c6173745f79725f726576656e7565181920012801121c0a146c6173745f79725f726576656e75655f79656172181a2001280112190a116c6561645f756e64657277726974657273181b20032809121a0a126f746865725f756e64657277726974657273181c20032809120d0a056e6f746573181d2001280912140a0c70726963696e675f64617465181e20012809121c0a147365635f616363657373696f6e5f6e756d626572181f2001280912160a0e7365635f66696c696e675f75726c182020012809121a0a127368617265735f6f75747374616e64696e67182120012801120b0a0373696318222001280112200a18737061635f636f6e7665727465645f746f5f74617267657418232001280812160a0e73746174655f6c6f636174696f6e18242001280912290a21756e6465727772697465725f71756965745f65787069726174696f6e5f6461746518252001280912290a21756e6465727772697465725f71756965745f65787069726174696f6e5f64617973182620012805120f0a077570646174656418272001280332d9020a0f42656e7a696e67615365727669636512650a144765744469766964656e747343616c656e64617212242e66696e617a6f6e2e4765744469766964656e747343616c656e646172526571756573741a252e66696e617a6f6e2e4765744469766964656e747343616c656e646172526573706f6e7365220012620a134765744561726e696e677343616c656e64617212232e66696e617a6f6e2e4765744561726e696e677343616c656e646172526571756573741a242e66696e617a6f6e2e4765744561726e696e677343616c656e646172526573706f6e73652200123e0a074765744e65777312172e66696e617a6f6e2e4765744e657773526571756573741a182e66696e617a6f6e2e4765744e657773526573706f6e73652200123b0a0647657449504f12162e66696e617a6f6e2e47657449504f526571756573741a172e66696e617a6f6e2e47657449504f526573706f6e73652200422eca021046696e617a6f6e5c477270635c417069e2021846696e617a6f6e5c477270635c4750424d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

