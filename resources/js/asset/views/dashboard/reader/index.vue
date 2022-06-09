<template>
  <div>
    <div class="content">
      <div class="container-fuild">
        <!-- <div class="row">
					<div class="col-12 col-md-3">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_one">
							<div class="_1adminOverveiw_card_left">
								<p class="_1adminOverveiw_card_left_num">3</p>

								<p class="_1adminOverveiw_card_left_title">Today's News</p>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="ios-paper" />
							</div>
						</div>
					</div>

					<div class="col-12 col-md-3">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<p class="_1adminOverveiw_card_left_num">29</p>

								<p class="_1adminOverveiw_card_left_title">Total News</p>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="ios-paper-outline" />
							</div>
						</div>
					</div>

					<div class="col-12 col-md-3">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<p class="_1adminOverveiw_card_left_num">29</p>

								<p class="_1adminOverveiw_card_left_title">Features News</p>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="md-copy" />
							</div>
						</div>
					</div>

					<div class="col-12 col-md-3">
						<div class="_1adminOverveiw_card _box_shadow _border_radious _mar_b30 _1adminOverveiw_bg_two">
							<div class="_1adminOverveiw_card_left">
								<p class="_1adminOverveiw_card_left_num">29</p>

								<p class="_1adminOverveiw_card_left_title">Card News</p>
							</div>
							<div class="_1adminOverveiw_card_right">
								<Icon type="md-list-box" />
							</div>
						</div>
					</div>
				</div>	 -->
        <!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
        <div class="
            _1adminOverveiw_table_recent
            _box_shadow
            _border_radious
            _mar_b30
            _p20
          ">
          <p class="_title0">
            Thông tin má đăng ký tài khoản
            <Button type="primary" @click="modal1 = true">
              <Icon type="md-add" /> Thêm mới
            </Button>
          </p>
          <template>
            <el-table :data="codes.results" stripe style="width: 100%">
              <el-table-column prop="id" label="id" width="auto">
              </el-table-column>

              <el-table-column prop="code" label="code" width="auto">
              </el-table-column>

              <el-table-column prop="isUsed" label="isUsed" width="auto">
              </el-table-column>

              <el-table-column prop="idEnterprise" label="idEnterprise" width="auto">
              </el-table-column>

              <el-table-column prop="startTime" label="startTime" width="auto">
              </el-table-column>

              <el-table-column prop="endTime" label="endTime" width="auto">
              </el-table-column>

            </el-table>
          </template>


        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Repository from "../../../api/repositories/RepositoryFactory";
const CodeRepository = Repository.get("codes");

export default {
  components: {},
  data() {
    return {
      codes: {
        message: null,
        error: false,
        code: 0,
        results: [
          {
            id: 0,
            code: null,
            isUsed: null,
            idEnterprise: null,
            startTime: null,
            endTime: null,
          },
        ],
      },
      columns: [
        { title: "id", key: "id" },
        { title: "Mã đăng ký", key: "code" },
        { title: "Trạng thái", key: "isUsed" },
        { title: "Doanh nghiệp", key: "idEnterprise" },
        { title: "Ngày bắt đầu", key: "startTime" },
        { title: "Ngày kết thúc", key: "endTime" },
        { title: "Thao tác", slot: "action", width: 150, align: "center" },
      ],
      modalTitle: '',
      modal1: false,
      modal2: false,
      modaledit: false,
      modal_loading: false,
      loading: true,
      dataCode: {
        id: 0,
        code: "Nguyennasdasdam",
        isUsed: null,
        idEnterprise: null,
        startTime: null,
        endTime: null,
      },
      resData: {
        message: null,
        error: null,
        code: null,
        results: null,
      },
      mesDelete: false,
      search: '',
    };
  },

  created() {
    this.getCodes();
  },
  methods: {
    getCodes: async function () {
      const { data } = await CodeRepository.get();
      this.codes = data;
    },
    success() {
      this.$Message["success"]({
        background: true,
        content: "Thành công",
      });
    },
    error() {
      this.$Message["error"]({
        background: true,
        content: "Không thành công",
      });
    },
    checkStatus: function (data) {
      if (!data.error) {
        this.success();
        this.getCodes();
      } else {
        this.error();
      }
    },
    createCode: async function () {
      const data = await CodeRepository.create(this.dataCode);
      this.checkStatus(data.data);
    },
    confirmDelete(row) {
      this.dataCode = row;
      this.modal2 = true;
    },
    deleteCode: async function () {
      const data = await CodeRepository.delete(this.dataCode.id);
      this.checkStatus(data.data);
    },
    showEdit: function () {
      this.modaledit = true
    }
  },
};
</script>



			