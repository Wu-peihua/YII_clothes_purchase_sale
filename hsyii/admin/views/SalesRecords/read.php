<div class="box">
    <div class="box-content">
        <div class="box-header">
            <a class="btn" href="javascript:;" onclick="we.reload();"><i class="fa fa-refresh"></i>刷新</a>
        </div><!--box-header end-->
        <div class="box-search">
            <form action="<?php echo Yii::app()->request->url;?>" method="get">
                <input type="hidden" name="r" value="<?php echo Yii::app()->request->getParam('r');?>">
                <label style="margin-right:10px;">
                    <span>关键字：</span>
                    <input style="width:200px;" class="input-text" type="text" name="keywords" value="<?php echo Yii::app()->request->getParam('keywords');?>">
                </label>
                <button class="btn btn-blue" type="submit">查询</button>
            </form>
        </div><!--box-search end-->
        <div class="box-table">
            <table class="list">
                <thead>
                <tr>
                    <th><?php echo $model->getAttributeLabel('sell_no');?></th>
                    <th><?php echo $model->getAttributeLabel('operator');?></th>
                    <th><?php echo $model->getAttributeLabel('custom_id');?></th>
                    <th><?php echo $model->getAttributeLabel('amount');?></th>
                    <th><?php echo $model->getAttributeLabel('sell_date');?></th>
                    <th><?php echo $model->getAttributeLabel('created');?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($arclist as $v){ ?>
                    <tr>
                        <td><?php echo  CHtml::link($v->sell_no, array('todetail', 'id'=>$v->id)); ?></td>
                        <td><?php echo $v->operator; ?></td>
                        <td><?php echo $v->custom_id; ?></td>
                        <td><?php echo $v->amount; ?></td>
                        <td><?php echo $v->sell_date; ?></td>
                        <td><?php echo $v->created; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div><!--box-table end-->
        <div class="box-page c"><?php $this->page($pages); ?></div>
    </div><!--box-content end-->
</div><!--box end-->
