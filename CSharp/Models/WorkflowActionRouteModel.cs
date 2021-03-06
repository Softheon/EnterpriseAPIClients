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
    /// Defines properties and methods for Workflow Action Route Model
    /// </summary>
    public partial class WorkflowActionRouteModel
    {
        /// <summary>
        /// Initializes a new instance of the WorkflowActionRouteModel class.
        /// </summary>
        public WorkflowActionRouteModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the WorkflowActionRouteModel class.
        /// </summary>
        /// <param name="drawerID">Gets or sets the drawer identifier.</param>
        /// <param name="entityID">Gets or sets the entity identifier.</param>
        /// <param name="keepOriginalTask">Gets or sets a value indicating
        /// whether [keep original task].</param>
        /// <param name="taskID">Gets or sets the task identifier.</param>
        /// <param name="targetID">Gets or sets the target id.</param>
        /// <param name="queueName">Gets or sets the name of the queue.</param>
        /// <param name="source">Gets or sets the source.</param>
        /// <param name="computer">Gets or sets the name of the
        /// computer.</param>
        /// <param name="iPAddress">Gets or sets the IP address.</param>
        public WorkflowActionRouteModel(int? drawerID = default(int?), int? entityID = default(int?), bool? keepOriginalTask = default(bool?), int? taskID = default(int?), int? targetID = default(int?), string queueName = default(string), string source = default(string), string computer = default(string), string iPAddress = default(string))
        {
            DrawerID = drawerID;
            EntityID = entityID;
            KeepOriginalTask = keepOriginalTask;
            TaskID = taskID;
            TargetID = targetID;
            QueueName = queueName;
            Source = source;
            Computer = computer;
            IPAddress = iPAddress;
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
        public int? DrawerID { get; set; }

        /// <summary>
        /// Gets or sets the entity identifier.
        /// </summary>
        [JsonProperty(PropertyName = "EntityID")]
        public int? EntityID { get; set; }

        /// <summary>
        /// Gets or sets a value indicating whether [keep original task].
        /// </summary>
        [JsonProperty(PropertyName = "KeepOriginalTask")]
        public bool? KeepOriginalTask { get; set; }

        /// <summary>
        /// Gets or sets the task identifier.
        /// </summary>
        [JsonProperty(PropertyName = "TaskID")]
        public int? TaskID { get; set; }

        /// <summary>
        /// Gets or sets the target id.
        /// </summary>
        [JsonProperty(PropertyName = "TargetID")]
        public int? TargetID { get; set; }

        /// <summary>
        /// Gets or sets the name of the queue.
        /// </summary>
        [JsonProperty(PropertyName = "QueueName")]
        public string QueueName { get; set; }

        /// <summary>
        /// Gets or sets the source.
        /// </summary>
        [JsonProperty(PropertyName = "Source")]
        public string Source { get; set; }

        /// <summary>
        /// Gets or sets the name of the computer.
        /// </summary>
        [JsonProperty(PropertyName = "Computer")]
        public string Computer { get; set; }

        /// <summary>
        /// Gets or sets the IP address.
        /// </summary>
        [JsonProperty(PropertyName = "IPAddress")]
        public string IPAddress { get; set; }

        /// <summary>
        /// Validate the object.
        /// </summary>
        /// <exception cref="ValidationException">
        /// Thrown if validation fails
        /// </exception>
        public virtual void Validate()
        {
            if (TaskID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "TaskID", 2147483647);
            }
            if (TaskID < 0)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "TaskID", 0);
            }
            if (TargetID > 2147483647)
            {
                throw new ValidationException(ValidationRules.InclusiveMaximum, "TargetID", 2147483647);
            }
            if (TargetID < 0)
            {
                throw new ValidationException(ValidationRules.InclusiveMinimum, "TargetID", 0);
            }
            if (QueueName != null)
            {
                if (QueueName.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "QueueName", 255);
                }
                if (QueueName.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "QueueName", 0);
                }
            }
            if (Source != null)
            {
                if (Source.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Source", 255);
                }
                if (Source.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Source", 0);
                }
            }
            if (Computer != null)
            {
                if (Computer.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "Computer", 255);
                }
                if (Computer.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "Computer", 0);
                }
            }
            if (IPAddress != null)
            {
                if (IPAddress.Length > 255)
                {
                    throw new ValidationException(ValidationRules.MaxLength, "IPAddress", 255);
                }
                if (IPAddress.Length < 0)
                {
                    throw new ValidationException(ValidationRules.MinLength, "IPAddress", 0);
                }
            }
        }
    }
}
