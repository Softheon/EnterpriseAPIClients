// <auto-generated>
// Code generated by Microsoft (R) AutoRest Code Generator.
// Changes may cause incorrect behavior and will be lost if the code is
// regenerated.
// </auto-generated>

namespace Softheon.Enterprise.Api.Client.Models
{
    using Microsoft.Rest;
    using Newtonsoft.Json;
    using System.Linq;

    /// <summary>
    /// Model for the GET Flow input parameters
    /// </summary>
    public partial class GetFlowRequestModel
    {
        /// <summary>
        /// Initializes a new instance of the GetFlowRequestModel class.
        /// </summary>
        public GetFlowRequestModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the GetFlowRequestModel class.
        /// </summary>
        /// <param name="drawerID">Gets or sets the drawer identifier.</param>
        /// <param name="entityID">Gets or sets the entity identifier.</param>
        /// <param name="type">Gets or sets the type. Possible values include:
        /// 'None', 'Workflow', 'Fatal', 'Warning', 'Info', 'Debug', 'Process',
        /// 'Rpc', 'Sql', 'Dde'</param>
        /// <param name="queueID">Gets or sets the queue identifier.</param>
        /// <param name="minWorkflowTime">Gets or sets the minimum workflow
        /// time.</param>
        /// <param name="maxWorkflowTime">Gets or sets the maximum workflow
        /// time.</param>
        /// <param name="minInsertionTime">Gets or sets the minimum insertion
        /// time.</param>
        /// <param name="maxInsertionTime">Gets or sets the maximum insertion
        /// time.</param>
        /// <param name="workflowUserID">Gets or sets the workflow user
        /// identifier.</param>
        /// <param name="workflowGroupID">Gets or sets the workflow group
        /// identifier.</param>
        /// <param name="operation">Gets or sets the operation. Possible values
        /// include: 'None', 'Update', 'Reset', 'Override', 'Null'</param>
        /// <param name="category">Gets or sets the category. Possible values
        /// include: 'None', 'Direct', 'AdHoc', 'Production', 'Review',
        /// 'Reset', 'RoutingSlip', 'ReviewRoutingSlip', 'Override'</param>
        /// <param name="status">Gets or sets the status. Possible values
        /// include: 'None', 'Approved', 'Rejected', 'Suspended', 'ApprovedR',
        /// 'NoneR'</param>
        /// <param name="state">Gets or sets the state. Possible values
        /// include: 'None', 'Processed', 'Pending', 'Waiting', 'ProcessedR',
        /// 'Override', 'OverrideR', 'WaitingR'</param>
        /// <param name="minIndex1">Gets or sets the minimum index 1.</param>
        /// <param name="maxIndex1">Gets or sets the maximum index 1.</param>
        /// <param name="minIndex2">Gets or sets the minimum index 2.</param>
        /// <param name="maxIndex2">Gets or sets the maximum index 2.</param>
        /// <param name="page">Gets or sets the page number.</param>
        /// <param name="pageSize">Gets or sets the size of the page.</param>
        /// <param name="sortOrder">Gets or sets the order. Possible values
        /// include: 'Unspecified', 'Ascending', 'Descending'</param>
        /// <param name="sortBy">Gets or sets the column to order by. Possible
        /// values include: 'ID', 'Type', 'QueueID', 'WorkflowTime',
        /// 'InsertionTime', 'Index'</param>
        public GetFlowRequestModel(int drawerID, int entityID, string type = default(string), int? queueID = default(int?), System.DateTime? minWorkflowTime = default(System.DateTime?), System.DateTime? maxWorkflowTime = default(System.DateTime?), System.DateTime? minInsertionTime = default(System.DateTime?), System.DateTime? maxInsertionTime = default(System.DateTime?), int? workflowUserID = default(int?), int? workflowGroupID = default(int?), string operation = default(string), string category = default(string), string status = default(string), string state = default(string), int? minIndex1 = default(int?), int? maxIndex1 = default(int?), int? minIndex2 = default(int?), int? maxIndex2 = default(int?), int? page = default(int?), int? pageSize = default(int?), string sortOrder = default(string), string sortBy = default(string))
        {
            DrawerID = drawerID;
            EntityID = entityID;
            Type = type;
            QueueID = queueID;
            MinWorkflowTime = minWorkflowTime;
            MaxWorkflowTime = maxWorkflowTime;
            MinInsertionTime = minInsertionTime;
            MaxInsertionTime = maxInsertionTime;
            WorkflowUserID = workflowUserID;
            WorkflowGroupID = workflowGroupID;
            Operation = operation;
            Category = category;
            Status = status;
            State = state;
            MinIndex1 = minIndex1;
            MaxIndex1 = maxIndex1;
            MinIndex2 = minIndex2;
            MaxIndex2 = maxIndex2;
            Page = page;
            PageSize = pageSize;
            SortOrder = sortOrder;
            SortBy = sortBy;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the drawer identifier.
        /// </summary>
        [JsonProperty(PropertyName = "DrawerID")]
        public int DrawerID { get; set; }

        /// <summary>
        /// Gets or sets the entity identifier.
        /// </summary>
        [JsonProperty(PropertyName = "EntityID")]
        public int EntityID { get; set; }

        /// <summary>
        /// Gets or sets the type. Possible values include: 'None', 'Workflow',
        /// 'Fatal', 'Warning', 'Info', 'Debug', 'Process', 'Rpc', 'Sql', 'Dde'
        /// </summary>
        [JsonProperty(PropertyName = "Type")]
        public string Type { get; set; }

        /// <summary>
        /// Gets or sets the queue identifier.
        /// </summary>
        [JsonProperty(PropertyName = "QueueID")]
        public int? QueueID { get; set; }

        /// <summary>
        /// Gets or sets the minimum workflow time.
        /// </summary>
        [JsonProperty(PropertyName = "MinWorkflowTime")]
        public System.DateTime? MinWorkflowTime { get; set; }

        /// <summary>
        /// Gets or sets the maximum workflow time.
        /// </summary>
        [JsonProperty(PropertyName = "MaxWorkflowTime")]
        public System.DateTime? MaxWorkflowTime { get; set; }

        /// <summary>
        /// Gets or sets the minimum insertion time.
        /// </summary>
        [JsonProperty(PropertyName = "MinInsertionTime")]
        public System.DateTime? MinInsertionTime { get; set; }

        /// <summary>
        /// Gets or sets the maximum insertion time.
        /// </summary>
        [JsonProperty(PropertyName = "MaxInsertionTime")]
        public System.DateTime? MaxInsertionTime { get; set; }

        /// <summary>
        /// Gets or sets the workflow user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "WorkflowUserID")]
        public int? WorkflowUserID { get; set; }

        /// <summary>
        /// Gets or sets the workflow group identifier.
        /// </summary>
        [JsonProperty(PropertyName = "WorkflowGroupID")]
        public int? WorkflowGroupID { get; set; }

        /// <summary>
        /// Gets or sets the operation. Possible values include: 'None',
        /// 'Update', 'Reset', 'Override', 'Null'
        /// </summary>
        [JsonProperty(PropertyName = "Operation")]
        public string Operation { get; set; }

        /// <summary>
        /// Gets or sets the category. Possible values include: 'None',
        /// 'Direct', 'AdHoc', 'Production', 'Review', 'Reset', 'RoutingSlip',
        /// 'ReviewRoutingSlip', 'Override'
        /// </summary>
        [JsonProperty(PropertyName = "Category")]
        public string Category { get; set; }

        /// <summary>
        /// Gets or sets the status. Possible values include: 'None',
        /// 'Approved', 'Rejected', 'Suspended', 'ApprovedR', 'NoneR'
        /// </summary>
        [JsonProperty(PropertyName = "Status")]
        public string Status { get; set; }

        /// <summary>
        /// Gets or sets the state. Possible values include: 'None',
        /// 'Processed', 'Pending', 'Waiting', 'ProcessedR', 'Override',
        /// 'OverrideR', 'WaitingR'
        /// </summary>
        [JsonProperty(PropertyName = "State")]
        public string State { get; set; }

        /// <summary>
        /// Gets or sets the minimum index 1.
        /// </summary>
        [JsonProperty(PropertyName = "MinIndex1")]
        public int? MinIndex1 { get; set; }

        /// <summary>
        /// Gets or sets the maximum index 1.
        /// </summary>
        [JsonProperty(PropertyName = "MaxIndex1")]
        public int? MaxIndex1 { get; set; }

        /// <summary>
        /// Gets or sets the minimum index 2.
        /// </summary>
        [JsonProperty(PropertyName = "MinIndex2")]
        public int? MinIndex2 { get; set; }

        /// <summary>
        /// Gets or sets the maximum index 2.
        /// </summary>
        [JsonProperty(PropertyName = "MaxIndex2")]
        public int? MaxIndex2 { get; set; }

        /// <summary>
        /// Gets or sets the page number.
        /// </summary>
        [JsonProperty(PropertyName = "Page")]
        public int? Page { get; set; }

        /// <summary>
        /// Gets or sets the size of the page.
        /// </summary>
        [JsonProperty(PropertyName = "PageSize")]
        public int? PageSize { get; set; }

        /// <summary>
        /// Gets or sets the order. Possible values include: 'Unspecified',
        /// 'Ascending', 'Descending'
        /// </summary>
        [JsonProperty(PropertyName = "SortOrder")]
        public string SortOrder { get; set; }

        /// <summary>
        /// Gets or sets the column to order by. Possible values include: 'ID',
        /// 'Type', 'QueueID', 'WorkflowTime', 'InsertionTime', 'Index'
        /// </summary>
        [JsonProperty(PropertyName = "SortBy")]
        public string SortBy { get; set; }

        /// <summary>
        /// Validate the object.
        /// </summary>
        /// <exception cref="ValidationException">
        /// Thrown if validation fails
        /// </exception>
        public virtual void Validate()
        {
            if (DrawerID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "DrawerID", 2147483647);
            }
            if (DrawerID < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "DrawerID", 1);
            }
            if (EntityID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "EntityID", 2147483647);
            }
            if (EntityID < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "EntityID", 1);
            }
            if (QueueID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "QueueID", 2147483647);
            }
            if (QueueID < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "QueueID", 1);
            }
            if (WorkflowUserID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "WorkflowUserID", 2147483647);
            }
            if (WorkflowUserID < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "WorkflowUserID", 1);
            }
            if (WorkflowGroupID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "WorkflowGroupID", 2147483647);
            }
            if (WorkflowGroupID < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "WorkflowGroupID", 1);
            }
            if (Page > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "Page", 2147483647);
            }
            if (Page < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "Page", 1);
            }
            if (PageSize > 1000)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "PageSize", 1000);
            }
            if (PageSize < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "PageSize", 1);
            }
        }
    }
}
