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
    /// Model for POST/PUT Queue Assignment input parameters.
    /// </summary>
    public partial class InsertQueueAssignmentRequestModel
    {
        /// <summary>
        /// Initializes a new instance of the InsertQueueAssignmentRequestModel
        /// class.
        /// </summary>
        public InsertQueueAssignmentRequestModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the InsertQueueAssignmentRequestModel
        /// class.
        /// </summary>
        /// <param name="queueID">Gets or sets the unique queue
        /// identifier.</param>
        /// <param name="userID">Gets or sets the user identifier.</param>
        /// <param name="type">Gets or sets the queue assignment type. Possible
        /// values include: 'Unspecified', 'Primary', 'Secondary'</param>
        /// <param name="order">Gets or sets the sort order.</param>
        /// <param name="taskSortColumn">Gets or sets the task sort column.
        /// Possible values include: 'TaskID', 'QueueID', 'DrawerID',
        /// 'AddressID', 'ObjectID', 'ObjectType', 'State', 'Priority',
        /// 'Description', 'Message1', 'Message2', 'Message3', 'Message4',
        /// 'Message5', 'OwnerUserID', 'OwnerGroupID', 'EffectiveUserID',
        /// 'EffectiveGroupID', 'PreviousQueueID', 'NextQueueID',
        /// 'InsertionTime', 'ResolutionTime', 'TaskFileAttachment',
        /// 'ReservedInt1', 'ReservedString1'</param>
        /// <param name="fetchType">Gets or sets the type of the fetch.
        /// Possible values include: 'Unspecified', 'Manual', 'Push'</param>
        public InsertQueueAssignmentRequestModel(int? queueID = default(int?), int? userID = default(int?), string type = default(string), int? order = default(int?), string taskSortColumn = default(string), string fetchType = default(string))
        {
            QueueID = queueID;
            UserID = userID;
            Type = type;
            Order = order;
            TaskSortColumn = taskSortColumn;
            FetchType = fetchType;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the unique queue identifier.
        /// </summary>
        [JsonProperty(PropertyName = "QueueID")]
        public int? QueueID { get; set; }

        /// <summary>
        /// Gets or sets the user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "UserID")]
        public int? UserID { get; set; }

        /// <summary>
        /// Gets or sets the queue assignment type. Possible values include:
        /// 'Unspecified', 'Primary', 'Secondary'
        /// </summary>
        [JsonProperty(PropertyName = "Type")]
        public string Type { get; set; }

        /// <summary>
        /// Gets or sets the sort order.
        /// </summary>
        [JsonProperty(PropertyName = "Order")]
        public int? Order { get; set; }

        /// <summary>
        /// Gets or sets the task sort column. Possible values include:
        /// 'TaskID', 'QueueID', 'DrawerID', 'AddressID', 'ObjectID',
        /// 'ObjectType', 'State', 'Priority', 'Description', 'Message1',
        /// 'Message2', 'Message3', 'Message4', 'Message5', 'OwnerUserID',
        /// 'OwnerGroupID', 'EffectiveUserID', 'EffectiveGroupID',
        /// 'PreviousQueueID', 'NextQueueID', 'InsertionTime',
        /// 'ResolutionTime', 'TaskFileAttachment', 'ReservedInt1',
        /// 'ReservedString1'
        /// </summary>
        [JsonProperty(PropertyName = "TaskSortColumn")]
        public string TaskSortColumn { get; set; }

        /// <summary>
        /// Gets or sets the type of the fetch. Possible values include:
        /// 'Unspecified', 'Manual', 'Push'
        /// </summary>
        [JsonProperty(PropertyName = "FetchType")]
        public string FetchType { get; set; }

        /// <summary>
        /// Validate the object.
        /// </summary>
        /// <exception cref="ValidationException">
        /// Thrown if validation fails
        /// </exception>
        public virtual void Validate()
        {
            if (QueueID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "QueueID", 2147483647);
            }
            if (QueueID < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "QueueID", 1);
            }
            if (UserID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "UserID", 2147483647);
            }
            if (UserID < 1)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "UserID", 1);
            }
        }
    }
}
